<?php

namespace App\Http\Controllers;

use Flow\Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Menlib\LogError as LogError;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIndex(){

        try {
            $data = [];
            return view('home.index',$data);

            //$this->apiRequest();
        } catch (\Exception $e) {
            LogError::logEexception($e);
        }
    }
}
