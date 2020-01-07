<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BeritaModel;

class NewsAdsApi extends Controller
{
    public function Api_get_list(Request $request)
    {
        $start_date = $request->start_date;
        $expired_date = $request->expired_date;
        if($start_date == null && $expired_date == null)
        {
            return response()->json(['messages' => 'startdate and expired date cannot null !']);
        }

    	$data = BeritaModel::join('news_ads_type', 'news_ads_type.id', 'news_ads.news_ads_type_id')->select('news_ads.created_at','news_ads.description','news_ads.image', 'news_ads.link', 'news_ads.news_ads_name', 'news_ads.news_ads_name','news_ads_type.news_ads_type', 'news_ads.updated_at')->whereDate('start_date','>=', $start_date)->whereDate('expired_date','<=', $expired_date)->get();
    	$result = [];
    	foreach ($data as $key => $value) {
    		$result[$key]['createdDate'] = $value->created_at;
    		$result[$key]['description'] = $value->description;
    		$result[$key]['image'] = $value->image;
    		$result[$key]['link'] = $value->link;
    		$result[$key]['newsAdsName'] = $value->news_ads_name;
    		$result[$key]['newsAdsType'] = $value->news_ads_type;	
    		$result[$key]['updatedDate'] = $value->updated_at;	
    	}

        if (empty($result)) {
            return response()->json(['messages' => 'Opps News & ads Not Found !']);
        }else{
            return response()->json($result);
        }
    }
}
