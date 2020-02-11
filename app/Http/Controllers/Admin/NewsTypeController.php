<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsAdsTypeModel;
use DataTables;

class NewsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news_type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function getDataTbales(){

        $data = NewsAdsTypeModel::select('news_ads_type','colors', 'id')->get();
        return Datatables::of($data)    
        ->addIndexColumn()
        ->addColumn('action', function($row){
         $btn = '<a href="#" class="text-success mr-2 edit" data-url="'.route('category.update',$row->id).'" data-news_ads_type="'.$row->news_ads_type.'" data-colors="'.$row->colors.'">
         <i class="nav-icon i-Pen-2 font-weight-bold"></i>
         </a>';
         $btn .= '<a href="#" class="text-danger mr-2 delete" data-url="'.route('category.destroy',$row->id).'">
         <i class="nav-icon i-Close-Window font-weight-bold"></i>
         </a>';
         if(isset($btn)){
            return $btn;
        }
    })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'news_ads_type' => 'required',
        ]);

        $data = $request->except(['_token']);
        NewsAdsTypeModel::create($data);

         return redirect()->back()->with(['msg_success' => 'News & Ads type Berhasil di tambahkan !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'news_ads_type' => 'required',
        ]);
        $data = $request->except(['_token', '_method']);
        NewsAdsTypeModel::where('id', $id)->update($data);

         return redirect()->back()->with(['msg_success' => 'News & Ads type Berhasil di Updated !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsAdsTypeModel::findOrFail($id)->delete();
        return redirect()->back()->with(['msg_warning' => 'News & Ads type Berhasil di Hapus !']);
    }
}
