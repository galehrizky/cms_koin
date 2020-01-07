<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BeritaModel;
class MainController extends Controller
{
    public function index()
    {
    	$news = BeritaModel::take(12)->get();

    	return view('home.index', compact('news'));
    }


    public function get_by_id($id)
    {
    	$row = BeritaModel::where('id', $id)->firstOrFail();
    	return view('home.single', compact('row'));
    }
}
