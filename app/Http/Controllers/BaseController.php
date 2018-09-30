<?php

namespace App\Http\Controllers;

use Flow\Exception;
use Illuminate\Routing\Controller as ParentController;
use phpDocumentor\Reflection\Types\Null_;
use Session as Session;
use GuzzleHttp\Client;

Abstract class BaseController extends ParentController
{
    const REQUEST_GET = 'get';
    const REQUEST_POST = 'post';
    const REQUEST_DELETE = 'delete';
    const REQUEST_TYPES = [self::REQUEST_GET, self::REQUEST_POST, self::REQUEST_DELETE];
    const API_SOURCE_JSON = 'json';
    const API_TOKEN = 'token';


    /**
     * Common function to interact with API server
     *
     * @param string $type Request type
     * @param string $api API route
     * @param array $data Get and/or Post parameters
     * @param string $source json or form
     *
     * @return mixed
     * @throws Exception
     */
    protected function apiRequest($type, $api, $data = [], $source = self::API_SOURCE_JSON)
    {
        try {
            if (!in_array($type, self::REQUEST_TYPES)) {
                throw new Exception("Request type is not valid - $type.");
            }
            $start = microtime(true);

            if (!empty($data['mf_token'])) {
                $token = array('mf_token' => $data['mf_token']);
                unset($data['mf_token']);
            } else {
                $token = $this->getToken();
            }
            $version = env('VERSION');
            if (!empty($version)) {
                $api = 'api'. DIRECTORY_SEPARATOR . $version . DIRECTORY_SEPARATOR . $api;
            } else {
                $api = 'api'. DIRECTORY_SEPARATOR . $api;
            }

            $response = NULL;

            $type = strtolower($type);
            $headers = ['X-Request-Platform' => config('env.PLATFORM'), 'X-Request-Client' => env('APP_NAME')];
            $client = new Client(['debug' => env('APP_DEBUG', false), 'exceptions' => env('APP_DEBUG', false), 'verify' => ('prod' !== env('APP_ENV')) ? false : true]);
            switch ($type) {
                case self::REQUEST_GET:
                    $get = (!empty($data['get'])) ? array_merge($data['get'], $token) : $token;
                    $api = (!empty($get)) ? $api . '?' . http_build_query($get) : $api;
                    $response = $client->get(env('API_URL') . DIRECTORY_SEPARATOR . $api, ['headers' => $headers]);
                    break;
                case self::REQUEST_POST:
                case self::REQUEST_DELETE:
                    $send_param = [];
                    $post = !empty($data['post']) ? $data['post'] : [];
                    if (!empty($post)) {
                        if (isset($data['files'])) {
                            $send_param = ['multipart' => []];
                            $count = 0;
                            foreach ($post as $key => $val) {
                                $send_param['multipart'][$count]['name'] = $key;
                                $send_param['multipart'][$count]['contents'] = $val;
                                $count++;
                            }
                            foreach ($data['files'] as $key => $file) {
                                $send_param['multipart'][$count]['name'] = $key;
                                $send_param['multipart'][$count]['contents'] = fopen($file, 'r');
                                $count++;
                            }
                            if(!empty($token['mf_token'])) {
                                $send_param['multipart'][$count]['name'] = 'mf_token';
                                $send_param['multipart'][$count]['contents'] = $token['mf_token'];
                            } else if(!empty($token['mf_hash'])) {
                                $send_param['multipart'][$count]['name'] = 'mf_hash';
                                $send_param['multipart'][$count]['contents'] = $token['mf_hash'];
                            }
                        } else {
                            $send_param = ['form_params' => array_merge($post,$token)];
                        }
                    } else {
                        $count = 0;
                        if (isset($data['files'])) {
                            $send_param = ['multipart' => []];
                            foreach ($data['files'] as $key => $file) {
                                $send_param['multipart'][$count]['name'] = $key;
                                $send_param['multipart'][$count]['contents'] = fopen($file, 'r');
                                $count++;
                            }
                        }
                        if(!empty($token['mf_token'])) {
                            $send_param['multipart'][$count]['name'] = 'mf_token';
                            $send_param['multipart'][$count]['contents'] = $token['mf_token'];
                        } else if(!empty($token['mf_hash'])) {
                            $send_param['multipart'][$count]['name'] = 'mf_hash';
                            $send_param['multipart'][$count]['contents'] = $token['mf_hash'];
                        }
                    }
                    $send_param['headers'] = $headers;
                    $response = $client->{$type}(env('API_URL') . DIRECTORY_SEPARATOR . $api, $send_param);
                    break;
                default:
                    throw new Exception("Invalid call type method");
            }//end switch

            // cleanup temp files
            if (isset($data['files']) && env('DELETE_UPLOAD_FILES', true) === true) {
                foreach ($data['files'] as $key => $file) {
                    @unlink($file);
                }
            }
            $elapsed = round(microtime(true) - $start, 3);
            if (!empty($response)) {
                return json_decode($response->getBody()->getContents(), true);
            }
            return NULL;
        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }


    /**
     * Get auth token
     *
     * @return array
     */
    protected function getToken() {
        $temp = [];
        if(\Auth::check()) {
            $profile_data = Session::get('profile_data');
            if (!empty($profile_data) && !empty(array_get($profile_data,'token',''))) {
                $temp['mf_token'] = array_get($profile_data,'token','');
            }
        } else {
            $temp['mf_hash'] = '345B6E57D8A612A85ABE973CF20EBFE69ACE3FA2B6A851ECB944839427B506D9';
        }
        return $temp;
    }
}
