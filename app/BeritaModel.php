<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    protected $table = "news_ads";
    protected $fillable = [
    	'news_ads_name',
    	'description',
    	'link',
    	'image',
    	'news_ads_type_id',
    	'start_date',
    	'expired_date',
    ];
}
