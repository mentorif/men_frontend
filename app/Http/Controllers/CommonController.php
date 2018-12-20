<?php

namespace App\Http\Controllers;

use Flow\Exception;
use Illuminate\Http\Request;

class CommonController extends BaseController
{
    const COUNTRY_REGION = 'country-region';
    const STATE_CITY = 'state-city';

    public function getCountryRegion(Request $request) {
        try {

            $inputs = $request->all();
            if (empty($inputs['ccode']) && empty($inputs['cid'])) {
                return response()->json([\Config::get('constants_en.txt.txt_code') => \Config::get('constants_en.code.code_invalid_request'),
                    \Config::get('constants_en.txt.txt_status') => \Config::get('constants_en.txt.txt_failed'),
                    \Config::get('constants_en.txt.txt_message') => [\Lang::get('message.invalid_input')]], 200);
            }
            $response = $this->apiRequest(self::REQUEST_GET, self::COUNTRY_REGION,[self::REQUEST_GET => $inputs]);
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                return response()->json($response, 200);
            }
            return response()->json([\Config::get('constants_en.txt.txt_code') => \Config::get('constants_en.code.code_invalid_request'),
                \Config::get('constants_en.txt.txt_status') => \Config::get('constants_en.txt.txt_failed'),
                \Config::get('constants_en.txt.txt_message') => [array_get($response,'errors',[])]], 200);
        } catch(\Exception $e) {
            // @todo: Log error
            return response()->json([\Config::get('constants_en.txt.txt_code') => \Config::get('constants_en.code.code_invalid_request'),
                \Config::get('constants_en.txt.txt_status') => \Config::get('constants_en.txt.txt_failed'),
                \Config::get('constants_en.txt.txt_message') => [\Lang::get('message.went_wrong')]], 200);
        }
    }

    public function getStateCity(Request $request) {
        try {
            $inputs = $request->all();
            if (empty($inputs['sid'])) {
                return response()->json([\Config::get('constants_en.txt.txt_code') => \Config::get('constants_en.code.code_invalid_request'),
                    \Config::get('constants_en.txt.txt_status') => \Config::get('constants_en.txt.txt_failed'),
                    \Config::get('constants_en.txt.txt_message') => [\Lang::get('message.invalid_input')]], 200);
            }
            $response = $this->apiRequest(self::REQUEST_GET, self::STATE_CITY,[self::REQUEST_GET => $inputs]);
            if (is_array($response) && \Config::get('constants_en.code.code_success') == array_get($response,'code','')) {
                return response()->json($response, 200);
            }
            return response()->json([\Config::get('constants_en.txt.txt_code') => \Config::get('constants_en.code.code_invalid_request'),
                \Config::get('constants_en.txt.txt_status') => \Config::get('constants_en.txt.txt_failed'),
                \Config::get('constants_en.txt.txt_message') => [array_get($response,'errors',[])]], 200);
        } catch(\Exception $e) {

            // @todo: Log error
            return response()->json([\Config::get('constants_en.txt.txt_code') => \Config::get('constants_en.code.code_invalid_request'),
                \Config::get('constants_en.txt.txt_status') => \Config::get('constants_en.txt.txt_failed'),
                \Config::get('constants_en.txt.txt_message') => [\Lang::get('message.went_wrong')]], 200);
        }

    }
}
