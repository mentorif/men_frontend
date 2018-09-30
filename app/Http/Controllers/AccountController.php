<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends BaseController
{
    const CODE_CONDUCT = 'account/coc';
    const TERMS_COND = 'account/terms';

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
                                if (1 == array_get($profile_data,'is_acc_setup_done', 0)) {
                                    // account set up is done
                                    // redirect to home view
                                }
                                // return account setup view
                                return view('account.mentee.venture', $data);
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
                                // redirect to home view
                            }
                            // return account setup voew
                        }
                        // return coc view
                    }
                }
                // @todo: return error privacy not confirmed
            }
            return redirect()->to('login');
        } catch (Exception $e) {

        }
    }

    public function getMentorSettings(Request $request) {
        try {
            $profile_data = \Session::get('profile_data');
            if (!empty($profile_data)) {
                dd($profile_data);

            }
            return redirect()->to('user/login');
        } catch (Exception $e) {

        }
    }

    public function getMenteeSettings(Request $request) {
        try {
            $profile_data = \Session::get('profile_data');
            if (!empty($profile_data)) {
                dd($profile_data);

            }
            return redirect()->to('user/login');
        } catch (Exception $e) {

        }
    }

    public function getMentorCoc(Request $request) {
        try {
            $profile_data = \Session::get('profile_data');
            if (!empty($profile_data)) {
                dd($profile_data);

            }
            return redirect()->to('user/login');
        } catch (Exception $e) {

        }
    }

    public function postMenteeCoc(Request $request) {
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
        } catch (Exception $e) {

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
        } catch (Exception $e) {

        }
    }
}
