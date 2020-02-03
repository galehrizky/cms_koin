@extends('layouts.front')

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div
      class="banner_content d-md-flex justify-content-between align-items-center"
      >
      <div class="mb-3 mb-md-0">
          <h2>Details</h2>
      </div>
  </div>
</div>
</div>
</section>
<!--================End Home Banner Area =================-->


<!--================Blog Area =================-->
<section class="blog_area single-post-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ url('storage/image/'.$row->image)}}" alt="">
                    </div>

                    <div class="blog_details">
                        <h2>{{ $row->news_ads_name }}</h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="far fa-user"></i> {{ $row->news_ads_type }}</a></li>
                        </ul>


                        <p>{{ $row->description }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area end =================-->
@endsection