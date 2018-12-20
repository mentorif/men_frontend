<?php

namespace App\Http\Controllers;

use App\Menlib\Utility;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountController extends BaseController
{
    const CODE_CONDUCT = 'account/coc';
    const TERMS_COND = 'account/terms';
    const VENTURE_DATA = 'account/venture-data';
    const MENTOR_DATA = 'account/mentor-data';
    const PROFILE_IMAGE_PATH = 'images/avatars';
    const PROFILE_PIC = 'account/profile-pic';
    CONST MENTEE_PERSONAL_DATA = 'account/mentee-personal-info';
    CONST USER_INFO = 'account/info';
    CONST READY_TO_GO = 'account/ready_to_go';

    public function getIndex(Request $request) {
        try {
            $profile_data = \Session::get('profile_data');$data = [];
            if (!empty($profile_data)) {
                //dd($profile_data);
                if (1 == array_get($profile_data,'is_privacy_confirmed', 0)) {
                    if (0 == array_get($profile_data,'is_mentor', 0)) {
                        // logged in user is mentee
                        if (1 == array_get($profile_data,'is_code_conduct_confirmed', 0)) {
                            // Code of conduct is confirmed
                            if (1 == array_get($profile_data,'is_term_condition_confirmed', 0)) {
                                // T&C is confirmed
                                if (1 == array_get($profile_data,'is_acc_setup_done', 0)) {
                                    // venture detail has been provided
                                    if (1 == array_get($profile_data,'is_profile_image_done', 0)) {
                                        // Profile Image is uploaded
                                        if (1 == array_get($profile_data,'is_personal_info_done', 0)) {
                                            // Personal info is saved
                                            if ('pri' !== array_get($profile_data,'visibility','')) {
                                                // account is either public or hidden
                                                return $this->takeMyControl($request, array_get($profile_data,'visibility',''), 'mentee');
                                            }
                                            // return preview screen
                                            return $this->getBusinessPreview($request);
                                        }
                                        // return personal detail screen
                                        return $this->getBusinessPersonal($request);
                                    }
                                    // return profile photo screen
                                    return $this->getBusinessPhoto($request);
                                }
                                // return account setup view
                                return $this->getBusinessVenture($request);
                            }
                            // return complete profile view
                            return view('account.mentee.completeprofile', $data);
                        }
                        // return coc view
                        return view('account.mentee.coc', $data);
                    } else {
                        // logged in user is mentor
                        if (1 == array_get($profile_data,'is_code_conduct_confirmed', 0)) {
                            // Code of conduct is confirmed
                            if (1 == array_get($profile_data,'is_acc_setup_done', 0)) {
                                // account set up is done
                                if ('pri' !== array_get($profile_data,'visibility','')) {
                                    // account is either public or hidden
                                    return $this->takeMyControl($request, array_get($profile_data,'visibility',''), 'mentor');
                                }
                                // return preview screen
                                return $this->getExpertPreview($request);
                            }
                            // return account setup view
                            return $this->getMentorProfile($request);
                        }
                        // return coc view
                        return view('account.mentor.coc', $data);
                    }
                }
                // @todo: return error privacy not confirmed
            }
            return redirect()->to('login');
        } catch (\Exception $e) {

        }
    }

    private function takeMyControl($request, $visibility, $user_type) {
        try {
            if ('pub' == $visibility) {
                //account is already public
                if ('mentor' == $user_type) {
                    // get me to mentee search page
                    return "I am here to look mentee";
                } else {
                    // get me to mentor search page
                    return "I am here to look mentor";
                }
            } else {
                // account is hidden
                //@todo: take appropriate action
            }
        } catch (\Exception $e) {

        }
    }

    public function getBusinessVenture(Request $request) {

        try {
            $response = $this->apiRequest(self::REQUEST_GET, self::VENTURE_DATA, [self::REQUEST_GET => []]);
            $data = [];
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                $data['business_details'] = array_get($response,'data.business_details',[]);
                $data['industries'] = array_get($response, 'data.industries',[]);
                $data['functional_areas'] = array_get($response, 'data.functional_areas',[]);
                $data['countries'] = array_get($response, 'data.countries',[]);
            }
            return view('account.mentee.venture', compact('data'));
        } catch (\Exception $e) {

        }

    }

    public function getBusinessPhoto(Request $request) {
        try {
            $profile_data = \Session::get('profile_data');
            return view('account.mentee.photo', compact('profile_data'));
        } catch (\Exception $e) {

        }
    }

    public function getBusinessPersonal(Request $request) {
        try {
            $countries = Utility::getRedisKey(\Config::get('rediskeys.red_country_master'));
            if (empty($countries)) {
                $response = $this->apiRequest(self::REQUEST_GET,parent::COUNTRIES_API_END_POINT, [self::REQUEST_GET => []]);
                if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                    $countries = array_get($response, 'data',[]);
                }
            }
            $personal_data = [];
            $response = $this->apiRequest(self::REQUEST_GET,self::MENTEE_PERSONAL_DATA, [self::REQUEST_GET => []]);
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                $personal_data = array_get($response, 'data',[]);
            }
            return view('account.mentee.personal', compact('countries','personal_data'));
        } catch (\Exception $e) {

        }
    }

    public function getBusinessPreview(Request $request) {
        try {
            $data = [];
            $response = $this->apiRequest(self::REQUEST_GET,self::USER_INFO, [self::REQUEST_GET => ['business_info' => 1,'personal_info' => 1]]);
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                $data = array_get($response, 'data',[]);
            }
            return view('account.mentee.preview', compact('data'));
        } catch (\Exception $e) {

        }
    }

    public function getMentorProfile(Request $request) {
        try {
            $data = [];
            $response = $this->apiRequest(self::REQUEST_GET, self::MENTOR_DATA, [self::REQUEST_GET => ['personal_info' => 1]]);
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                $data['mentor_details'] = array_get($response,'data.mentor_details',[]);
                $data['industries'] = array_get($response, 'data.industries',[]);
                $data['functional_areas'] = array_get($response, 'data.functional_areas',[]);
                $data['countries'] = array_get($response, 'data.countries',[]);
            }
            return view('account.mentor.completeprofile', compact('data'));
        } catch (\Exception $e) {

        }
    }

    public function getExpertPreview(Request $request) {
        try {
            $data = [];
            $response = $this->apiRequest(self::REQUEST_GET,self::USER_INFO, [self::REQUEST_GET => ['expert_info' => 1,'personal_info' => 1]]);
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                $data = array_get($response, 'data',[]);
            }
            return view('account.mentor.preview', compact('data'));
        } catch (\Exception $e) {

        }
    }

    public function postMentCoc(Request $request) {
        try {
            $inputs = $request->all();
            //dd($inputs);
            $validator = \Validator::make($inputs, [
                'data.agree' => 'required',
                ],
                [
                    'data.agree.required' => 'Check the checkbox to proceed',
                ]
            );
            if($validator->passes()) {

                $post = ['coc_confirmed' => 1];
                $response = $this->apiRequest(self::REQUEST_POST, self::CODE_CONDUCT, [self::REQUEST_POST => $post]);
                if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                    \Session::put('profile_data.is_code_conduct_confirmed', 1);
                    return \Redirect::to('account');
                } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                    && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {

                    return redirect('account')->withErrors(['data.agree' => array_get($response,'errors',[])]);
                }
            }
            return redirect('account')->withErrors($validator)->withInput();
        } catch (\Exception $e) {

        }
    }

    public function postMenteeTerms(Request $request) {
        try {
            $post = ['terms_confirmed' => 1];
            $response = $this->apiRequest(self::REQUEST_POST, self::TERMS_COND, [self::REQUEST_POST => $post]);
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                \Session::put('profile_data.is_term_condition_confirmed', 1);
                return \Redirect::to('account');
            } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {

                return redirect('account')->withErrors(['errs' => array_get($response,'errors',[])]);
            }
        } catch (\Exception $e) {

        }
    }

    public function postMenteeVenture(Request $request) {
        try {
            $inputs = $request->all();
            $validate_array = [
                'business_name' => array_get($inputs, 'data.BusinessProfile.business_name',''),
                'business_type' => array_get($inputs, 'data.BusinessProfile.business_type',''),
                'business_type_other' => array_get($inputs, 'data.BusinessProfile.business_type_other',''),
                'business_stage' => array_get($inputs, 'data.BusinessProfile.business_stage',''),
                'business_stage_other' => array_get($inputs, 'data.BusinessProfile.business_stage_other',''),
                'business_launch_month' => array_get($inputs, 'data.BusinessProfile.launch_date_month',0),
                'business_launch_year' => array_get($inputs, 'data.BusinessProfile.launch_date_year',0),
                'business_industry' => array_get($inputs, 'data.BusinessProfile.industry_id',0),
                'business_functional_area' => array_get($inputs, 'data.BusinessProfile.SelectedFunctionalAreas',[]),
                'business_description' => array_get($inputs, 'data.BusinessProfile.business_offers',0),
                'business_offer' => array_get($inputs, 'data.BusinessProfile.business_request',0),
                'business_country' => array_get($inputs, 'data.User.country_id',0),
                'business_state' => array_get($inputs, 'data.User.state',0),
                'business_city' => array_get($inputs, 'data.User.city',''),
                'business_pincode' => array_get($inputs, 'data.User.postal_code',0),
            ];
            $websites = [];
            foreach (array_get($inputs, 'data.BusinessProfile.Website',[]) as $website) {
                if (!empty(array_get($website,'url','')) || !empty(array_get($website,'type',''))) {
                    $websites[] = $website;
                }
            }
            unset($inputs);
            $validate_array['business_website'] = $websites;
            $validator = \Validator::make($validate_array,[
                'business_type' => ['required', Rule::in(['profitable','nonprofitable','social','unsure','other'])],
                'business_type_other' => 'required_if:business_type,other',
                'business_stage' => ['required', Rule::in(['profitable','idea','revenue','operational','other'])],
                'business_stage_other' => 'required_if:business_stage,other',
                'business_launch_month' => ['nullable','required_unless:business_stage,idea', Rule::in([1,2,3,4,5,6,7,8,9,10,11,12])],
                'business_launch_year' => ['nullable','required_unless:business_stage,idea', 'regex:/^\d{4}$/'],
                'business_industry' => ['required','regex:/^\d+$/'],
                'business_functional_area' => 'required|array|size:3',
                'business_description' => 'required|min:150',
                'business_offer' => 'required|min:150',
                'business_country' => ['required','regex:/^\d+$/'],
                'business_state' => ['required','regex:/^\d+$/'],
                'business_city' => 'required|string|max:50',
                'business_pincode' => ['required','regex:/^\d{4,10}$/'],
                'business_website'=> ['nullable','array','max:5'],
                'business_website.0.url' => 'required_with:business_website.0.type|url',
                'business_website.0.type' => ['required_with:business_website.0.url', Rule::in(['active_website','linkedin','facebook','twitter','other'])],
                'business_website.1.url' => 'required_with:business_website.1.type|url',
                'business_website.1.type' => ['required_with:business_website.1.url', Rule::in(['active_website','linkedin','facebook','twitter','other'])],
                'business_website.2.url' => 'required_with:business_website.2.type|url',
                'business_website.2.type' => ['required_with:business_website.2.url', Rule::in(['active_website','linkedin','facebook','twitter','other'])],
                'business_website.3.url' => 'required_with:business_website.3.type|url',
                'business_website.3.type' => ['required_with:business_website.3.url', Rule::in(['active_website','linkedin','facebook','twitter','other'])],
                'business_website.4.url' => 'required_with:business_website.4.type|url',
                'business_website.4.type' => ['required_with:business_website.4.url', Rule::in(['active_website','linkedin','facebook','twitter','other'])],

            ]);
            if ($validator->passes()) {
                $response = $this->apiRequest(self::REQUEST_POST, self::VENTURE_DATA, [self::REQUEST_POST => $validate_array]);
                if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                    \Session::put('profile_data.is_acc_setup_done', 1);
                    return \Redirect::to('/account/business-photo');
                } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                    && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {
                    return redirect('/account/business-venture')->withErrors(array_get($response,'errors',[]))->withInput();
                }
            }
            return redirect('/account/business-venture')->withErrors($validator)->withInput();
        } catch (\Exception $e) {

        }
    }

    public function postProfilePhoto(Request $request) {
        try {
            $inputs = $request->all();
            $profile_pic_path = '';
            if (!empty($inputs['photo_upload'])) {
                $validator = \Validator::make($inputs,[
                    'photo_upload' => 'file|image|mimes:jpeg,png|max:2048'
                ]);
                if ($validator->passes()) {
                    $profile_pic_path = Utility::uploadFile($inputs['photo_upload'], 'public', self::PROFILE_IMAGE_PATH);
                } else {
                    return redirect('/account/business-photo')->withErrors($validator)->withInput();
                }
            }
            if (!empty($profile_pic_path)) {
                $post = [
                    'profile_pic_path' => $profile_pic_path,
                ];
                $response = $this->apiRequest(self::REQUEST_POST, self::PROFILE_PIC, [self::REQUEST_POST => $post]);
                if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                    \Session::put('profile_data.is_profile_pic_done', 1);
                    \Session::put('profile_data.profile_pic_path', $profile_pic_path);
                    return \Redirect::to('/account/business-personal');
                } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                    && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {
                    return redirect('/account/business-photo')->withErrors(array_get($response,'errors',[]))->withInput();
                }
            }
            return \Redirect::to('/account/business-personal');
        } catch (\Exception $e) {

        }
    }

    public function postMenteePersonal(Request $request) {
        try {
            $inputs = $request->all();
            $validate_array = [
                'birth_country_id' => array_get($inputs, 'data.User.birth_country_id',''),
                'spoken_lang' => array_get($inputs, 'data.User.spoken_language',[]),
                'phone_mobile' => array_get($inputs, 'data.User.phone_mobile',''),
                'm_dial_code' => array_get($inputs, 'data.User.m_dial_code',''),
                'phone_landline' => array_get($inputs, 'data.User.phone_landline',''),
                'birth_year' => array_get($inputs, 'data.User.birth_year',''),
                'gender' => array_get($inputs, 'data.User.gender',''),
                'ethnicity' => array_get($inputs, 'data.User.ethnicity',''),
                'education_level' => array_get($inputs, 'data.User.education_level',''),
                'intent_to_connect' => array_get($inputs, 'data.User.intent_to_connect',''),
            ];
            //unset($inputs);
            $validator = \Validator::make($validate_array,[
                'birth_country_id' => 'required',
                'spoken_lang' => 'required',
                'phone_mobile' => 'required',
                'm_dial_code' => 'required',
                'birth_year' => 'required',
                'gender' => 'required',
            ]);
            if ($validator->passes()) {
                $response = $this->apiRequest(self::REQUEST_POST, self::MENTEE_PERSONAL_DATA, [self::REQUEST_POST => $validate_array]);
                if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                    \Session::put('profile_data.is_personal_info_done', 1);
                    return \Redirect::to('/account/business-preview');
                } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                    && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {
                    return redirect('/account/business-personal')->withErrors(array_get($response,'errors',[]))->withInput();
                }
            }
            return redirect('/account/business-personal')->withErrors($validator)->withInput();
        } catch (\Exception $e) {

        }
    }

    public function postMentorProfile(Request $request) {
        try {
            $inputs = $request->all();
            $validate_array = [
                'mentor_selected_expertises' => array_get($inputs, 'data.ExpertProfile.selected_expertises',[]),
                'mentor_industry_id' => array_get($inputs, 'data.ExpertProfile.industry_id',''),
                'mentor_professional_bio' => array_get($inputs, 'data.ExpertProfile.professional_bio',''),
                'mentor_entrepreneur_pitch' => array_get($inputs, 'data.ExpertProfile.entrepreneur_pitch',''),
                'mentor_mentoring_stages' => array_get($inputs, 'data.ExpertProfile.mentoring_stages',[]),
                'mentor_years_management' => array_get($inputs, 'data.ExpertProfile.years_management',0),
                'mentor_years_ownership' => array_get($inputs, 'data.ExpertProfile.years_ownership',0),
                'mentor_country_expertise_id' => array_get($inputs, 'data.ExpertProfile.country_expertise_id',[]),
                'mentor_language_id' => array_get($inputs, 'data.User.language_id',[]),
                'mentor_country_id' => array_get($inputs, 'data.User.country_id',''),
                'mentor_phone' => array_get($inputs, 'data.User.phone',''),

                'mentor_website_url' => array_get($inputs, 'data.ExpertProfile.website_url',''),
                'mentor_business_name' => array_get($inputs, 'data.ExpertProfile.business_name',''),
                'mentor_title' => array_get($inputs, 'data.ExpertProfile.title',''),
                'mentor_city' => array_get($inputs, 'data.User.city',''),
                'mentor_state' => array_get($inputs, 'data.User.state',''),
                'mentor_postal_code' => array_get($inputs, 'data.User.postal_code',''),
                'mentor_ethnicity' => array_get($inputs, 'data.User.ethnicity',''),
                'mentor_gender' => array_get($inputs, 'data.User.gender',''),
                'mentor_birth_year' => array_get($inputs, 'data.User.birth_year',0),
                'mentor_photo_upload' => array_get($inputs, 'data.User.photo_upload','')
            ];
            $rules = [
                'mentor_selected_expertises' => 'required|array|min:1|max:7',
                'mentor_industry_id' => 'required',
                'mentor_professional_bio' => 'required|min:300|max:1000',
                'mentor_entrepreneur_pitch' => 'required|min:300|max:1000',
                'mentor_mentoring_stages' => ['required', 'array', Rule::in(['concept','startup','existing'])],
                'mentor_years_management' => ['required','regex:/^\d+$/'],
                'mentor_years_ownership' => ['required','regex:/^\d+$/'],
                'mentor_country_expertise_id' => 'required|array|min:1',
                'mentor_language_id' => ['required','array','max:15'],
                'mentor_country_id' => 'required',
                'mentor_phone' => ['required','regex:/^\d+$/'],
            ];
            if (!empty($validate_array['mentor_photo_upload'])) {
                $rules['mentor_photo_upload'] = 'file|image|mimes:jpeg,png|max:2048';
            }
            $validator = \Validator::make($validate_array,$rules);
            $profile_pic_path = '';
            if ($validator->passes()) {
                if (!empty($validate_array['mentor_photo_upload'])) {
                    $profile_pic_path = Utility::uploadFile($validate_array['mentor_photo_upload'], 'public', self::PROFILE_IMAGE_PATH);
                    $validate_array['mentor_photo_upload'] = $profile_pic_path;
                }
                $response = $this->apiRequest(self::REQUEST_POST, self::MENTOR_DATA, [self::REQUEST_POST => $validate_array]);
                if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                    \Session::put('profile_data.is_personal_info_done', 1);
                    \Session::put('profile_data.is_acc_setup_done', 1);
                    \Session::put('profile_data.is_profile_pic_done', 1);
                    \Session::put('profile_data.profile_pic_path', $profile_pic_path);
                    return \Redirect::to('/account/expert-preview');
                } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                    && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {
                    return redirect('/account/mentor-profile')->withErrors(array_get($response,'errors',[]))->withInput();
                }
            }
            return redirect('/account/mentor-profile')->withErrors($validator)->withInput();
        } catch (\Exception $e) {

        }
    }

    public function getAccountReady() {
        try {
            $response = $this->apiRequest(self::REQUEST_POST, self::READY_TO_GO, [self::REQUEST_POST => []]);
            $profile_data = \Session::get('profile_data');
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                if (0 == array_get($profile_data,'is_mentor', 0)) {
                    return \Redirect::to('/search/mentor');
                } else {
                    return \Redirect::to('/search/business');
                }
            } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {

                if (0 == array_get($profile_data,'is_mentor', 0)) {
                    return redirect('/account/business-preview')->withErrors(['errs' => array_get($response,'errors',[])])->withInput();
                } else {
                    return redirect('/account/expert-preview')->withErrors(['errs' => array_get($response,'errors',[])])->withInput();
                }

            }
        } catch (\Exception $e) {

        }
    }
}
