@extends('layouts.main_layout')
@section('content')

<div class="other-slider" style="background-image: url('{{$blog->getImage()}}');">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner"> 
                <h4  data-aos="fade-down">{{$blog->title}}</h4>
                <span class=" pr-2"  data-aos="fade-down"><i class="fas fa-calendar-alt ml-2"></i>{{$blog->updated_at}}</span>  
                <div class="overlay"></div>
            <div class="item active"></div>
            </div>
        </div>
    </div>
</div>
<!--        end slider--> 
<!--start content-->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <div class="our-content-one">
                <p>{{$blog->description}}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="our-content-two">
                    <h4 data-aos="fade-down-right">{{__('lang.related_articles')}}</h4>
                    <hr>
                    @foreach($related_blogs as $related_blog)
                        <img src="{{$related_blog->getImage()}}" data-aos="zoom-out-right">
                        <h6>{{$related_blog->title}}</h6>
                        <p>{{ \Illuminate\Support\Str::limit($related_blog->description, 100, '...') }}</p>
                    @endforeach
                                
                </div>    
            </div>
        </div> 
    </div>
</div>
    
<!--end content-->
<!--start relation subject-->
<div class="relation">
    <div class="container">
        <h4 data-aos="fade-down-right">{{__('lang.related_articles')}}</h4>
        <hr class="mb-3 w-25 ">
        <div class="row">
            @foreach($related_blogs as $related_blog)
                <div class="col-lg-3 col-sm-12">
                    <img src="{{$related_blog->getImage()}}" data-aos="flip-up">
                    <p>{{$related_blog->title}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
 <!--end relation subject-->     
 @endsection  