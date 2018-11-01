<?php
namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use MenModel;

    public static function setSession($data) {
        $profile_data['first_name'] = array_get($data,'f_name','');
        $profile_data['last_name'] = array_get($data,'l_name','');
        $profile_data['email'] = array_get($data,'email','');
        $profile_data['is_mentor'] = array_get($data,'is_mentor',0);
        $profile_data['user_id'] = array_get($data,'id',0);
        $profile_data['token'] = array_get($data,'persist_code','');
        $profile_data['is_privacy_confirmed'] = array_get($data,'is_privacy_confirmed',0);
        $profile_data['is_term_condition_confirmed'] = array_get($data,'is_term_condition_confirmed',0);
        $profile_data['is_code_conduct_confirmed'] = array_get($data,'is_code_conduct_confirmed',0);
        $profile_data['is_acc_setup_done'] = array_get($data,'is_acc_setup_done',0);
        $profile_data['visibility'] = array_get($data,'visibility',0);
        $profile_data['is_profile_image_done'] = array_get($data,'is_profile_image_done',0);
        $profile_data['profile_pic_path'] = array_get($data,'profile_pic_path','');
        $is_personal_info_done = 0;
        if (!empty(array_get($data,'personalinfo',[])) && count(array_get($data,'personalinfo',[]))) {
            $is_personal_info_done = 1;
        }
        $profile_data['is_personal_info_done'] = $is_personal_info_done;

        \Session::put('profile_data', $profile_data);
        return \Session::save();

    }

    public static function login($email, $rem_me = false){

        $userObj = self::where('email',$email)->first();
        if (!empty($userObj) && $userObj instanceof User) {
            Auth::login($userObj, $rem_me);
            return $userObj;
        }
        return false;
    }
}
