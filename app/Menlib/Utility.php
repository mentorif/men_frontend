<?php
namespace App\Menlib;

class  Utility {

    /*
     * Validate a password
     * As per password policy, there should be
     * one Uppercase letter, one lowercase letter
     * one number and one special character
     * length should be between 8 to 32
     */
    static function validatePass($pass) {
        if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,32}$/', $pass)) {
            return true;
        }
        return false;
    }
}