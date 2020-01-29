@extends('layouts.admin')
@section('title','Form ')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
@endsection
@section('content')
<!-- ============ Body content start ============= -->
<div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="breadcrumb">
            <h1>{{ request()->type == "News" ? "Add News" : (request()->type == "Ads" ? "Add Ads": "Add Travel & umroh" ) }}</h1>
            <ul>
                <li><a href="">{{ request()->type == "News" ? "Add News" : (request()->type == "Ads" ? "Add Ads": "Add Travel & umroh" ) }}</a></li>
            </ul>
        </div>

        <div class="separator-breadcrumb border-top"></div>
        {!! Form::model($data, ['route' => ['news.update', $data->id], 'enctype' => 'multipart/form-data']) !!}
        @method('PUT')
        @include('admin.berita.form')
        {!! Form::close() !!}
</div>
<!-- ============ Body content End ============= -->
@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
    <script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 100,
        width : 1200
      });
             $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').text(fileName);
        });
    });
    </script>
@endsection
