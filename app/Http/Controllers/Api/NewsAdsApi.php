<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BeritaModel;
use App\NewsAdsTypeModel;
use Carbon\Carbon;

class NewsAdsApi extends Controller
{
    public function Api_get_list()
    {
    	$data = BeritaModel::join('news_ads_type', 'news_ads_type.id', 'news_ads.news_ads_type_id')->select('news_ads.created_at', 'news_ads.news_ads_name', 'news_ads.id','news_ads.image', 'news_ads.updated_at')->whereDate('expired_date', '>=', Carbon::now()->format('Y-m-d'))->get();

    	$result = [];
        $aw = [];
        
    	foreach ($data as $key => $value) {

    		$aw[$key]['postDate'] = Carbon::parse($value->created_at)->format('D, d M Y');
    		$aw[$key]['judul'] = $value->news_ads_name;
    		$aw[$key]['thumbail'] = $value->image;
            $aw[$key]['id'] = $value->id;
    	}


        $result['status'] = true;
        $result['data'] = $aw;

        if (empty($aw)) {
            return response()->json(['status' => false, 'messages' => 'Opps News & ads Not Found !']);
        }else{
            return response()->json($result);
        }
    }


    public function Category()
    {
        $ss = [];
        $result = [];

        $cat = NewsAdsTypeModel::all();

        foreach ($cat as $key => $value) {
            $ss[$key]['category'] = $value->news_ads_type; 
        }
        

        $result['status'] = true;
        $result['data'] = $ss;
        if (empty($ss)) {
            return response()->json(['status' => false, 'messages' => 'Empty!']);
        }else{
            return response()->json($result);
        }
    }

    public function getNewsByid($id)
    {
        $data = BeritaModel::join('news_ads_type', 'news_ads_type.id', 'news_ads.news_ads_type_id')->select('news_ads.created_at','news_ads.description','news_ads.image', 'news_ads.link', 'news_ads.news_ads_name', 'news_ads.news_ads_name','news_ads_type.news_ads_type','news_ads_type.colors', 'news_ads.updated_at')->where('news_ads.id', $id)->get();

        $result = [];
        $aw = [];
        $kt = [];
        foreach ($data as $key => $value) {
            $aw[$key]['postDate'] = Carbon::parse($value->created_at)->format('D, d M Y');
            $aw[$key]['description'] = $value->description;
            $aw[$key]['image'] = $value->image;
            $aw[$key]['newsAdsName'] = $value->news_ads_name;
            $kt[$key]['newsAdsType'] = $value->news_ads_type;
            $kt[$key]['colors'] = $value->colors;

        }


        $result['status'] = true;
        $result['data']['content'] = $aw;
        $result['data']['category'] = $kt;

        if (empty($aw)) {
            return response()->json(['status' => false, 'messages' => 'Opps News & ads Not Found !']);
        }else{
            return response()->json($result);
        }
    }


    public function add_umroh(Request $request)
    {
        $method = $request->method();
        echo $method;
        
    }
}
