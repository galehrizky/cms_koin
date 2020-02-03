@extends('layouts.front')

@section('content')
    <!--================ three-block section start =================-->  

    <div class="three-block  area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>News</h3>
                    <p>Abundantly creeping saw forth spirit can made appear fourth us.</p>
                </div>

            </div>
            <div class="row">
                @foreach($news as $row)
                <div class="col-lg-4">
                    <div class="single-blog style-five">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ url('storage/image/'.$row->image)}}" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">{{ $row->news_ads_type }}</a>/
                                <a href="#"> {{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</a>
                            </div>
                            <a class="d-block" href="{{ route('details', $row->id) }}">
                                <h4>{{ $row->news_ads_name }}</h4>
                            </a>
                        </div>
                    </div> 

                </div> 

                @endforeach

            </div>
        </div>
    </div>

    <!--================ three-block section end =================-->    

    <!--================ Umroh / travel section start =================-->  

    <div class="video-area background_one area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Travel Umroh</h3>
                    <p>Abundantly creeping saw forth spirit can made appear fourth us.</p>
                </div>

            </div>
            <div class="row">
                @foreach($travel_limit_1 as $row)
                <div class="col-lg-7">
                    <div class="single-blog video-style">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ url('storage/image/'.$row->image)}}" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">{{ $row->news_ads_type }}</a>/
                                <a href="">{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</a>
                            </div>
                            <a class="d-block" href="{{ route('details', $row->id) }}">
                                <h4>{{ $row->news_ads_name }}</h4>
                            </a>
    
                        </div>
                    </div> 

                </div> 
                @endforeach
                <div class="col-lg-5">
                    @foreach($travel_limit_3 as $row)
                    <div class="single-blog video-style small row m_b_30">
                        <div class="thumb col-12 col-sm-5">
                            <img class="img-fluid" style="width: 175px;height:162;" src="{{ url('storage/image/'.$row->image)}}" alt="">
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#">{{ $row->news_ads_type }}</a>
                            </div>
                            <a class="d-block" href="{{ route('details', $row->id) }}">
                                <h4>{{ $row->news_ads_name }}</h4>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--================ Umroh / Travel section end =================-->  
@endsection