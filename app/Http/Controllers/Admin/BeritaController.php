<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsAdsTypeModel;
use Illuminate\Support\Str;
use App\BeritaModel;
use DataTables;
use Storage;
use Carbon\Carbon;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index');
    }


    public function getDataTbales($param){

        $data = BeritaModel::join('news_ads_type', 'news_ads_type.id', 'news_ads.news_ads_type_id')->select('news_ads.news_ads_name','news_ads.start_date','news_ads.expired_date','news_ads.type', 'news_ads_type.news_ads_type', 'news_ads.id')->where('type', $param)->get();
            return Datatables::of($data)    
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="'.route('news.edit', $row->id).'" class="text-success mr-2 edit" >
                                        <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                  </a>';
                            $btn .= '<a href="#" class="text-danger mr-2 delete" data-url="'.route('news.destroy',$row->id).'">
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_ads_type = NewsAdsTypeModel::all()->pluck('news_ads_type', 'id');
        return view('admin.berita.create', compact('news_ads_type'));
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
            'news_ads_name' => 'required|min:5|max:50',
            'link' => 'url',
            'image' => 'required|max:2000|mimes:jpg,png,jpeg',
            'news_ads_type_id' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'expired_date' => 'required',
        ]);

        $filename = uniqid().rand(0,9999). date('ymdhishisymdYYYmmMmMhymdymdYmdD') . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image/', $filename);

        $data = $request->except(['image', '_token']);
        $data['image'] = $filename;
        BeritaModel::create($data);
        \Session::flash('msg_success', 'Data Berhasil di tambahkan !'); 
         return redirect('dashboard/news?type='.$request->type);
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
        $news_ads_type = NewsAdsTypeModel::all()->pluck('news_ads_type', 'id');
        $data = BeritaModel::findOrFail($id);
        return view('admin.berita.edit', compact('news_ads_type', 'data'));
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
            'news_ads_name' => 'required|min:5|max:50',
            'link' => 'url',
            'image' => 'max:2000|mimes:jpg,png,jpeg',
            'news_ads_type_id' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'expired_date' => 'required',
        ]);
        $data = $request->except(['image', '_token', '_method', 'files']);

        $get_old_data = BeritaModel::findOrFail($id);
        if($request->hasFile('image')){
            if(Storage::disk('local')->exists('public/image/'.$get_old_data->path_image)){
                Storage::disk('local')->delete('public/image/'.$get_old_data->path_image);
            }
            $filename = uniqid().rand(0,9999). date('ymdhishisymdYYYmmMmMhymdymdYmdD') . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/image/', $filename);
             $data['image'] = $filename;

        }

        BeritaModel::where('id', $id)->update($data);
          return redirect('dashboard/news?type='.$request->type)->with(['msg_success' => 'News & Ads Berhasil di Updated !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get_old_data = BeritaModel::findOrFail($id);
        if(Storage::disk('local')->exists('public/image/'.$get_old_data->path_image)){
                Storage::disk('local')->delete('public/image/'.$get_old_data->path_image);
                BeritaModel::find($id)->delete();
                return redirect()->back()->with(['msg_warning' => 'Berita berhasil di Hapus']);
            }
    }
}
