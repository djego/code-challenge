<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HistoryShortLink;
class ShortLink extends Model
{
    protected $fillable = [
        'url', 'code', 'count',
    ];

    public function getUrlShortAttribute() {
        return env('APP_URL'). '/' . ucfirst($this->code);
    }

    public function getVisitUniqueAttribute(){
        $rs =  HistoryShortLink::where('short_link_id',$this->id)->select('ip_public')->groupBy('ip_public')->get();
        $c = 0;
        foreach ($rs as $key => $value) {
            $c++;
        }
        return $c;
    }

}
