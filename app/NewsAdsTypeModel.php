<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsAdsTypeModel extends Model
{
	protected $table = "news_ads_type";
    protected $fillable = [
    	'news_ads_type',
    	'colors',
    ];

}
