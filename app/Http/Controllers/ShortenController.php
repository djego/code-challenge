<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Redirect;
use App\Models\ShortLink;
use App\Models\HistoryShortLink;


class ShortenController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }

    public function process(Request $request){
        $data = Array();

        $params = $request->all();
        $validator = Validator::make($params, [
                    'url' => 'required|url',

        ]);
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $rs = $this->save($request);
        $data['url_original'] = $params['url'];
        $data['url_shorten'] = env('APP_URL').'/'.$rs->code;
        return view('result',$data);
    }

    protected function save(Request $request){
        $data = $request->all();
        $code = substr(md5(uniqid()),0,8);
        $short = ShortLink::create([
            'url' => $data['url'],
            'code' => $code,
            'count' => 0,
        ]);
        return $short;
    }

    public function shortUrl(Request $request, $code){
        $short = ShortLink::where('code',$code)->first();
        if (!$short) {
            return redirect('');
        }
        $short->count = $short->count + 1;
        $short->save();
        $ip = $request->ip();
        $record = HistoryShortLink::create([
            'ip_public' => $ip,
            'short_link_id' => $short->id,
        ]);
        return Redirect::to($short->url);

    }

    public function stats(){
        $shorts = ShortLink::paginate(20);
        $history = HistoryShortLink::join('short_links', 'short_link_id', '=', 'short_links.id')
        ->paginate(20);
        $data['stats_general'] = $shorts;
        $data['stats_detail'] = $history;

        return view('stats',$data);
    }
}
