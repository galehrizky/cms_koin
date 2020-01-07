@extends('layouts.admin')
@section('title','Form News & Ads')
@section('css')
<style type="text/css">
  .invalid {
       width :100%;
       margin-top: .25rem;
       font-size: 80%;
       color: #d22346;
  }
</style>
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
        {!! Form::open(['route' => 'news.store', 'enctype' => 'multipart/form-data']) !!}
        @include('admin.berita.form')
        {!! Form::close() !!}
</div>
<!-- ============ Body content End ============= -->
@endsection

@section('js')
<script type="text/javascript">

       $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').text(fileName);
        });
    });
    </script>
@endsection
