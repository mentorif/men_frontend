<?php
namespace App\Menlib;

use Illuminate\Support\Facades\Storage;

class  Utility {

    const DEFAULT_FILE_SIZE = 2048;

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

    static function uploadFile($image, $driver = 'public', $path = '') {

        $path = trim($path,DIRECTORY_SEPARATOR);
        $upload_dir = storage_path('app').DIRECTORY_SEPARATOR.$driver.DIRECTORY_SEPARATOR.$path;

        $storageObj = Storage::disk($driver);
        if (!file_exists($upload_dir)) {
            $storageObj->makeDirectory($path);
        }

        $filename = date('YmdHisu').'-'.rand(1,100000000000).'.'.$image->getClientOriginalExtension();
        return $storageObj->putFileAs($path, $image, $filename);

    }

    static function validateFile($uploadObj, $allowed_formats = array(), $rejected_formats = array(), $max_size = self::DEFAULT_FILE_SIZE) {
        if (!$uploadObj->isValid()) {
            return ['code' => 'failed', 'error' => \Lang::get('invalid_image')];
        }
        //$mimeType = strtolower($uploadObj->getMimeType());
        $extension = strtolower($uploadObj->getClientOriginalExtension());

        if (count($rejected_formats) && in_array($extension, $rejected_formats)) {
            return ['code' => 'failed', 'error' => str_ireplace('REJECTED_FORMATS',implode(',',$rejected_formats), \Lang::get('not_allowed_format'))];
        }
        if (count($allowed_formats) && !in_array($extension, $allowed_formats)) {
            return ['code' => 'failed', 'error' => str_ireplace('ALLOWED_FORMATS',implode(',',$allowed_formats), \Lang::get('allowed_format'))];
        }
        $size = $uploadObj->getSize();
        return $size;
        if ($size > $max_size) {
            return ['code' => 'failed', 'error' => str_ireplace('SIZE_LIMIT',$max_size.' kb', \Lang::get('file_size_error'))];
        }

        return true;
    }

    static function getRedisKey($key) {
        $redis = \Redis::connection();
        $data = $redis->get($key);
        if (!empty($data)) {
            return unserialize(base64_decode($data));
        }
    }
}