<?php
namespace App\Http\Controllers;

use App\Menlib\LogError as LogError;

class StaticPagesController extends BaseController
{
    public function getPrivacyPolicy(){

        try {
            $data = [];
            return view('staticpages.privacy',$data);

        } catch (\Exception $e) {
            LogError::logException($e);
        }
    }

    public function getCodeConduct(){

        try {
            $data = [];
            return view('staticpages.codeconduct',$data);

        } catch (\Exception $e) {
            LogError::logException($e);
        }
    }

    public function getTermUse(){

        try {
            $data = [];
            return view('staticpages.term',$data);

        } catch (\Exception $e) {
            LogError::logException($e);
        }
    }
}