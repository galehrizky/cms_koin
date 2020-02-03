<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BeritaModel;
class MainController extends Controller
{
    public function index()
    {
        $news = BeritaModel::select('news_ads.*', 'news_ads_type.news_ads_type')->join('news_ads_type', 'news_ads_type.id', '=', 'news_ads.news_ads_type_id')->WhereIn('type', ['news', 'ads'])->take(12)->orderBy('id', 'DESC')->get();


        $travel_limit_1 = BeritaModel::select('news_ads.*', 'news_ads_type.news_ads_type')->join('news_ads_type', 'news_ads_type.id', '=', 'news_ads.news_ads_type_id')->Where('type', 'travel')->take(1)->get();
        $travel_limit_3 = BeritaModel::select('news_ads.*', 'news_ads_type.news_ads_type')->join('news_ads_type', 'news_ads_type.id', '=', 'news_ads.news_ads_type_id')->Where('type', 'travel')->take(3)->get();

    	return view('home.index', compact('news', 'travel_limit_1', 'travel_limit_3'));
    }


    public function get_by_id($id)
    {
    	$row = BeritaModel::select('news_ads.*', 'news_ads_type.news_ads_type')->join('news_ads_type', 'news_ads_type.id', '=', 'news_ads.news_ads_type_id')->where('news_ads.id', $id)->firstOrFail();
    	return view('home.single', compact('row'));
    }


    public function archive($type){

    switch ($type) {
        case 'news':
            $arr = ['news', 'ads'];
            break;
        case 'travel':
            $arr = ['travel'];
            break;
        
        default:
            abort(404);
            break;
    }

       $news = BeritaModel::select('news_ads.*', 'news_ads_type.news_ads_type')->join('news_ads_type', 'news_ads_type.id', '=', 'news_ads.news_ads_type_id')->WhereIn('type',$arr)->orderBy('id', 'DESC')->paginate(18);;

        return view('home.archive', compact('news'));
    }

    public function register(){
        
        return view('home.register_');
    }

    public function get_doc()
    {
        return view('doc');
    }
}
