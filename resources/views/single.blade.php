@extends('layouts.app')

@section('content')

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="{{url('home')}}">Home</a></li>
              <li><a href="#">{{$article->cluster}}</a></li>
            </ol>
            <h1>{{$article->article_title}}</h1>
            <div class="post_commentbox"> <a href="#">{{$article->author_name}}</a> <span><i class="fa fa-calendar"></i>{{$article->created_at}}</span>  </div>
            <div class="single_page_content"> 
              <div class="single_iteam">
                <img style="width:80%;" class="img-center" src="{{ URL::to('/') }}/storage/images/{{$article->image}}" alt="">
              </div>
              <p>{{$article->article_content}}</p>
            </div></div>
          </div>
        </div>
      </div>
    </section>

@endsection