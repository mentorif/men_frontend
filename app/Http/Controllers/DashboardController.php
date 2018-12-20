<?php
namespace App\Http\Controllers;

use App\Menlib\Utility;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DashboardController extends BaseController
{

    public function getProfile(Request $request) {

        try {

            $data = [];
            return view('dashboard.profile', compact('data'));
        } catch (\Exception $e) {

        }
    }
}