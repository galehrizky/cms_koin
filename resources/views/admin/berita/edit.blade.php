@extends('layouts.admin')
@section('title','Form Ads')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
@endsection
@section('content')
<!-- ============ Body content start ============= -->
<div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="breadcrumb">
            <h1>News & Ads</h1>
            <ul>
                <li><a href="">News & Ads</a></li>
                <li>News & Ads</li>
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
