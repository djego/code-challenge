<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ShortLink;
class HistoryShortLink extends Model
{
    protected $fillable = [
        'short_link_id', 'ip_public',
    ];
    public function getShortLinkAttribute()
    {
        return $this->belongsTo(ShortLink::class);
    }
}
