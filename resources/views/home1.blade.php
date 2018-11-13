@extends('layouts.app')

@section('content')

  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
                @if (session('success'))    
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{$latest[9]->article_title}}</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{$latest[8]->article_title}}</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{$latest[7]->article_title}}</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{$latest[6]->article_title}}</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{$latest[5]->article_title}}</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{$latest[4]->article_title}}</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{$latest[3]->article_title}}</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{$latest[2]->article_title}}</a></li>
            <li><a href="#"><img src="images/news_thumbnail2.jpg" alt="">{{$latest[1]->article_title}}</a></li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[2]->id ])}}"> <img src="{{ URL::to('/') }}/storage/images/{{$leisure_sql[2]->image}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="{{route('single', ['parameter' => $id = $leisure_sql[2]->id ])}}"></a></h2>
              <p>{{$leisure_sql[1]->article_title}}</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[2]->id ])}}"> <img src="{{ URL::to('/') }}/storage/images/{{$clubs_sql[2]->image}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="{{route('single', ['parameter' => $id = $clubs_sql[2]->id ])}}">{{$clubs_sql[2]->article_title}}</a></h2>
            </div>
          </div>
          <div class="single_iteam"> <a href="{{route('single', ['parameter' => $id = $academics_sql[2]->id ])}}"> <img src="{{ URL::to('/') }}/storage/images/{{$academics_sql[2]->image}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="{{route('single', ['parameter' => $id = $academics_sql[2]->id ])}}">{{$academics_sql[2]->article_title}}</a></h2>            
            </div>
          </div>
          <div class="single_iteam"> <a href="{{route('single', ['parameter' => $id = $community_sql[2]->id ])}}"> <img src="{{ URL::to('/') }}/storage/images/{{$community_sql[2]->image}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="{{route('single', ['parameter' => $id = $community_sql[2]->id ])}}">{{$community_sql[2]->article_title}}</a></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Popular posts</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="{{route('single', ['parameter' => $id = $popular[0]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$popular[0]->image}}"> </a>
                  <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $popular[0]->id ])}}" class="catg_title"> {{$popular[0]->article_title}}</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="{{route('single', ['parameter' => $id = $popular[1]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$popular[1]->image}}"> </a>
                  <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $popular[1]->id ])}}" class="catg_title">  {{$popular[1]->article_title}}</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="{{route('single', ['parameter' => $id = $popular[2]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$popular[2]->image}}"> </a>
                  <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $popular[2]->id ])}}" class="catg_title">  {{$popular[2]->article_title}}</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="{{route('single', ['parameter' => $id = $popular[3]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$popular[3]->image}}"> </a>
                  <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $popular[3]->id ])}}" class="catg_title">  {{$popular[3]->article_title}}</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="{{route('single', ['parameter' => $id = $popular[4]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$popular[4]->image}}"> </a>
                  <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $popular[4]->id ])}}" class="catg_title">  {{$popular[4]->article_title}}</a> </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Academia</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="{{route('single', ['parameter' => $id = $academics_sql[0]->id ])}}" class="featured_img"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$academics_sql[0]->image}}"> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{route('single', ['parameter' => $id = $academics_sql[0]->id ])}}">{{$academics_sql[0]->article_title}}</a> </figcaption>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $academics_sql[1]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$academics_sql[1]->image}}"> </a>
                    <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $academics_sql[1]->id ])}}" class="catg_title"> {{$academics_sql[1]->article_title}}</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $academics_sql[2]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$academics_sql[2]->image}}"> </a>
                    <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $academics_sql[2]->id ])}}" class="catg_title"> {{$academics_sql[2]->article_title}}</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $academics_sql[3]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$academics_sql[3]->image}}"> </a>
                    <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $academics_sql[3]->id ])}}" class="catg_title"> {{$academics_sql[3]->article_title}}</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $academics_sql[4]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$academics_sql[4]->image}}"> </a>
                    <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $academics_sql[4]->id ])}}" class="catg_title"> {{$academics_sql[4]->article_title}}</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Leisure</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[0]->id ])}}" class="featured_img"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$leisure_sql[0]->image}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="{{route('single', ['parameter' => $id = $leisure_sql[0]->id ])}}">{{$leisure_sql[0]->article_title}}</a> </figcaption>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[1]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$leisure_sql[1]->image}}"> </a>
                      <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[1]->id ])}}" class="catg_title"> {{$leisure_sql[1]->article_title}}</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[2]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$leisure_sql[2]->image}}"> </a>
                      <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[2]->id ])}}" class="catg_title"> {{$leisure_sql[2]->article_title}}</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[3]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$leisure_sql[3]->image}}"> </a>
                      <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[3]->id ])}}" class="catg_title"> {{$leisure_sql[3]->article_title}}</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[4]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$leisure_sql[4]->image}}"> </a>
                      <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $leisure_sql[4]->id ])}}" class="catg_title"> {{$leisure_sql[4]->article_title}}</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Clubs</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[0]->id ])}}" class="featured_img"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$clubs_sql[0]->image}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="{{route('single', ['parameter' => $id = $clubs_sql[0]->id ])}}">{{$clubs_sql[0]->article_title}}</a> </figcaption>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[1]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$clubs_sql[1]->image}}"> </a>
                      <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[1]->id ])}}" class="catg_title"> {{$clubs_sql[1]->article_title}}</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[2]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$clubs_sql[2]->image}}"> </a>
                      <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[2]->id ])}}" class="catg_title"> {{$clubs_sql[2]->article_title}}</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[3]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$clubs_sql[3]->image}}"> </a>
                      <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[3]->id ])}}" class="catg_title"> {{$clubs_sql[3]->article_title}}</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[4]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$clubs_sql[4]->image}}"> </a>
                      <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $clubs_sql[4]->id ])}}" class="catg_title"> {{$clubs_sql[4]->article_title}}</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Community</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="{{route('single', ['parameter' => $id = $community_sql[0]->id ])}}"> <img src="{{ URL::to('/') }}/storage/images/{{$community_sql[0]->image}}" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{route('single', ['parameter' => $id = $community_sql[0]->id ])}}">{{$community_sql[0]->article_title}}</a> </figcaption>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $community_sql[1]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$community_sql[1]->image}}"> </a>
                    <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $community_sql[1]->id ])}}" class="catg_title"> {{$community_sql[1]->article_title}}</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $community_sql[2]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$community_sql[2]->image}}"> </a>
                    <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $community_sql[2]->id ])}}" class="catg_title"> {{$community_sql[2]->article_title}}</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $community_sql[3]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$community_sql[3]->image}}"> </a>
                    <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $community_sql[3]->id ])}}" class="catg_title"> {{$community_sql[3]->article_title}}</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="{{route('single', ['parameter' => $id = $community_sql[4]->id ])}}" class="media-left"> <img alt="" src="{{ URL::to('/') }}/storage/images/{{$community_sql[4]->image}}"> </a>
                    <div class="media-body"> <a href="{{route('single', ['parameter' => $id = $community_sql[4]->id ])}}" class="catg_title"> {{$community_sql[4]->article_title}}</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
@endsection
