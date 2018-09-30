<?php
namespace App\Http\Controllers;

use Flow\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

use Symfony\Component\Console\Input\Input;
use App\Menlib\Utility;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\User;

Class UserController extends BaseController
{
    use AuthenticatesUsers;

    const REGISTER_USER_API_ENDPOINT = 'user/register';
    const SIGNIN_USER_API_ENDPOINT = 'user/signin';
    const REGISTER_TYPES = ['mentor','mentee'];

    /*
     * New user registration request
     * @params array
     * array:2 [▼
          "_token" => "mxV5LSqXku1W9HkUSWu2QncvmyhW6hg9cq41hfhD"
          "data" => array:1 [
            "User" => array:7 [
              "first_name" => ""
              "last_name" => ""
              "email" => ""
              "inpwd" => ""
              "confirmPwd" => ""
              "register_type" => ""
              "confirmation" => ""
            ]
          ]
        ]
     */
    public function postSignUp(Request $request) {
        try {
            $inputs = $request->all();

            // validate the data submitted
            if (!empty($inputs['data']['User'])) {
                $is_valid = true; $errors = [];
                if(empty($inputs['data']['User']['first_name'])) {
                    $is_valid = false;
                    $errors['first_name'][] = 'First name is required';
                }
                if(empty($inputs['data']['User']['last_name'])) {
                    $is_valid = false;
                    $errors['last_name'][] = 'Last name is required';
                }
                if(empty($inputs['data']['User']['email'])) {
                    $is_valid = false;
                    $errors['email'][] = 'Email is required';
                }
                if(empty($inputs['data']['User']['inpwd'])) {
                    $is_valid = false;
                    $errors['inpwd'][] = 'Password is required';
                }
                if(empty($inputs['data']['User']['confirmPwd'])) {
                    $is_valid = false;
                    $errors['confirmPwd'][] = 'Confirm password is required';
                }
                if(empty($inputs['data']['User']['register_type'])
                    || (!empty($inputs['data']['User']['register_type']) && !in_array($inputs['data']['User']['register_type'], self::REGISTER_TYPES))) {
                    $is_valid = false;
                    $errors['register_type'][] = 'Choosing one option above';
                }
                if(empty($inputs['data']['User']['confirmation'])
                    || (!empty($inputs['data']['User']['confirmation']) && $inputs['data']['User']['confirmation'] != 1)) {
                    $is_valid = false;
                    $errors['confirmation'][] = 'Please accept the privacy policy';
                }
                if ((empty($inputs['data']['User']['inpwd']) && !empty($inputs['data']['User']['confirmPwd']))
                    || (!empty($inputs['data']['User']['inpwd']) && empty($inputs['data']['User']['confirmPwd']))
                    || ($inputs['data']['User']['inpwd'] != $inputs['data']['User']['confirmPwd'])
                ) {
                    $is_valid = false;
                    $errors['confirmPwd'][] = 'Confirm password does not match with password';
                }
                if (!filter_var($inputs['data']['User']['email'], FILTER_VALIDATE_EMAIL)) {
                    $is_valid = false;
                    $errors['email'][] = 'Invalid email address';
                }
                if ($is_valid === true && false === Utility::validatePass($inputs['data']['User']['inpwd'])) {
                    $is_valid = false;
                    $errors['inpwd'][] = 'Please choose a valid password';
                }

                if ($is_valid === true){
                    $post = [];
                    $post['f_name'] = $inputs['data']['User']['first_name'];
                    $post['l_name'] = $inputs['data']['User']['last_name'];
                    $post['email'] = $inputs['data']['User']['email'];
                    $post['pass'] = $inputs['data']['User']['inpwd'];
                    $post['confirm_pass'] = $inputs['data']['User']['confirmPwd'];
                    $post['is_mentor'] = ($inputs['data']['User']['register_type'] == 'mentor') ? 1 : 0;
                    $post['is_privacy_confirmed'] = ($inputs['data']['User']['confirmation'] == 1) ? 1 : 0;

                    // make api call
                    $response = $this->apiRequest(self::REQUEST_POST, self::REGISTER_USER_API_ENDPOINT, [self::REQUEST_POST => $post]);
                    if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                        User::login($post['email']);
                        $profile_data = [];
                        $profile_data['f_name'] = $post['f_name'];
                        $profile_data['l_name'] = $post['l_name'];
                        $profile_data['email'] = $post['email'];
                        $profile_data['is_mentor'] = $post['is_mentor'];
                        $profile_data['is_privacy_confirmed'] = $post['is_privacy_confirmed'];
                        $profile_data['id'] = array_get($response,'data.user_id');
                        $profile_data['persist_code'] = array_get($response,'data.token');
                        User::setSession($profile_data);
                        $redirect = \Session::get('redirect_uri','/account');
                        unset($profile_data, $inputs, $post);
                        return Redirect::to($redirect);
                    } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                        && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {
                        return Redirect::back()->with( ['inputs' => $inputs,'errs' => array_get($response,'errors',[])] );
                    }
                }
                return Redirect::back()->with( ['inputs' => $inputs,'errors' => $errors] );
            }
            return Redirect::back()->with( ['inputs' => $inputs,'errs' => "Invalid Inputs"] );
        } catch (Exception $e) {

        }
    }

    public function getSignIn(Request $request) {
        try {

            $data = [];
            return view('login.index',$data);
        } catch (Exception $e) {

        }
    }

    public function postSignIn(Request $request) {
        try  {
            $inputs = $request->all();
            $validator = \Validator::make($inputs, [
                'data.auth.username' => 'required|email',
                'data.auth.password' => 'required'],
                [
                    'data.auth.username.required' => 'The email address is required',
                    'data.auth.password.required' => 'The password is required',
                ]
            );
            if($validator->passes()) {

                // If the class is using the ThrottlesLogins trait, we can automatically throttle
                // the login attempts for this application. We'll key this by the username and
                // the IP address of the client making these requests into this application.
                if ($this->hasTooManyLoginAttempts($request)) {
                    $this->fireLockoutEvent($request);
                    return $this->sendLockoutResponse($request);
                }

                $post = [];
                $post['email'] = array_get($inputs,'data.auth.username');
                $post['pass'] = array_get($inputs,'data.auth.password');

                // make api call
                $response = $this->apiRequest(self::REQUEST_POST, self::SIGNIN_USER_API_ENDPOINT, [self::REQUEST_POST => $post]);
                if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                    User::login($post['email']);
                    $request->session()->regenerate();
                    $this->clearLoginAttempts($request);
                    User::setSession(array_get($response,'data.0'));
                    unset($inputs, $post);
                    $redirect = \Session::get('redirect_uri','/account');
                    return Redirect::to($redirect);
                } else if(is_array($response) && \Config::get('constants_en.code.code_success') != array_get($response,'code','')
                    && \Config::get('constants_en.txt.txt_failed') ==  array_get($response,'status','')) {

                    // If the login attempt was unsuccessful we will increment the number of attempts
                    // to login and redirect the user back to the login form. Of course, when this
                    // user surpasses their maximum number of attempts they will get locked out.
                    $this->incrementLoginAttempts($request);

                    return redirect()->back()
                        ->withInput($request->except(["data.auth.password"]))
                        ->withErrors(['errs' => array_get($response,'errors',[])]);
                }
            }
            return redirect('user/login')->withErrors($validator)->withInput();
        } catch (Exception $e) {
            return redirect()->back()
                ->withInput($request->except(["data.auth.password"]))
                ->withErrors();
        }
    }
}