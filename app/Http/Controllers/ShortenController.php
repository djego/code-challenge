<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;


class ShortenController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }

    public function process(Request $request){
        $data = Array();

        $params = $request->all();
        // print_r($params);die();
        $validator = Validator::make($params, [
                    'url' => 'required|url',

        ]);
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        return view('result',$data);
    }
}
