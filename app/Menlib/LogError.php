<?php

namespace App\Menlib;


Class LogError {

    public static function logException($exception, $code = null) {
        $log = 1;
        $context = array (
            'context' => array (
                'get_post' => Input::all(),
                'json_post' => Request::json ()->all()
            )
        );
        $where = '';
        if(empty($code) || !is_numeric($code)){
            $file = $exception->getFile();
            $path = pathinfo ( $file );
            $where = ' (' . $exception->getFile() . ':' . $exception->getLine() . ')';
            $errorMsg = $exception->getMessage();
        }else{
            $errorMsg = $exception;
        }

        $error = array ();

        $error ['exception'] = $errorMsg;
        $error ['hostname'] = gethostname ();
        $error ['domain'] = !empty($path ['filename']) ? $path ['filename'] : '';
        $error ['full_url'] = !empty(Request::fullUrl()) ? Request::fullUrl() : '' ;
        $error ['group'] = 'droom-web';
        $error ['short_desc'] = $where;
        $error ['context'] = $context;
        $error ['from_url'] = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $error ['datetime'] = date ( 'Y-m-d H:i:s' );
        $error ['timestamp'] = date('YmdHis');
        $error ['type'] = 'ERROR';
        $error ['eid'] = round(microtime(true) * 1000);
        if((!empty($code) &&  $code == -1) || (empty($code) && $exception->getCode() == -1)){
            if(!empty(env('LOGGING_LEVEL')) && env('LOGGING_LEVEL') != 3){
                $log = 0;
            }
            $error ['type'] = 'INFO';
        }elseif((!empty($code) &&  $code == -2) || (empty($code) &&  $exception->getCode() == -2)){
            if(!empty(env('LOGGING_LEVEL') && env('LOGGING_LEVEL') != 2 && env('LOGGING_LEVEL') != 3){
                $log = 0;
            }
            $error ['type'] = 'DEBUG';
        }
        $error ['trace'] = [];
        if(empty($code)  || !is_numeric($code)){
            $error ['trace'] = $exception->getTrace ();
        }

        $file = fopen(storage_path() . "/logs/mentorif_frontend_exception.log", "a");
        fwrite($file, json_encode($error) . "\n");
        fclose($file);
    }
}