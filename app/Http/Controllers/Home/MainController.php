<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BeritaModel;
class MainController extends Controller
{
    public function index()
    {
        $news = BeritaModel::with(['cat' => function($query){
            $query->select('news_ads_type');
        }])->WhereIn('type', ['news', 'ads'])->take(12)->get();


        foreach ($news as $key => $value) {
                dd($value->cat);
        }

        $travel_limit_1 = BeritaModel::Where('type', 'travel')->take(1)->get();
        $travel_limit_3 = BeritaModel::Where('type', 'travel')->take(3)->get();

    	return view('home.index', compact('news', 'travel_limit_1', 'travel_limit_3'));
    }


    public function get_by_id($id)
    {
    	// $row = BeritaModel::where('id', $id)->firstOrFail();
    	return view('home.single');
    }


    public function archive(){
        return view('home.archive');
    }

    public function register(){
        
        return view('home.register_');
    }

    public function get_doc()
    {
        return view('doc');
    }
}
