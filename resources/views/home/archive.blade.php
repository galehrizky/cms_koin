@extends('layouts.front')

@section('content')
  <!--================Category  Area Start =================-->

    <section class="category-page area-padding">
        <div class="container">
            <div class="row">
                @foreach($news as $row)
                <div class="col-md-6 col-lg-4">
                    <div class="single-category">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ url('storage/image/'.$row->image)}}" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">{{ $row->news_ads_type }} </a>/
                                <a href="#"> {{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</a>
                            </div>
                            <a class="d-block" href="{{ route('details', $row->id) }}">
                                <h4>Shall for rule whose toge one may heaven to dat</h4>
                            </a>
                        </div>
                    </div> 
                </div>
                @endforeach

                <div class="col-12 text-center">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </section>
    <!--================Category  Area End =================-->
@endsection