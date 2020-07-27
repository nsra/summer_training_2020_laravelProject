@extends('layouts.main_layout')


@section('content')
  <!--        start slider-->
                
  <div class="slider">
    <div class="container">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <h1 data-aos="fade-down">{{$first_ad->title}}</h1>  
                <h4 data-aos="fade-down">{{$first_ad->description}}</h4>
                <button type="button" href="{{$first_ad->link}}" class="btn btn-light mt-4" data-aos="fade-down-left">{{$first_ad->button}}</button>  
                <div class="overlay"></div>
            <div class="item active"></div>
            </div>
        </div>
    </div>
</div>
<!--        end slider-->
<!--       start services-->

<div class="our-service">
<div class="container ">

    <h2 class="mt-5">{{__('service_type.titles.service_types')}}</h2>
</div>
<div class="container">
    <div class="row">

    @foreach($service_types as $service_type)
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="services text-center" data-aos="zoom-in-up">
                <img src="{{ $service_type->image_link }}" />
                <p>{{$service_type->name}}</p>
            </div>
        </div>
    @endforeach
      
</div>    

<!--        end service-->
<!--        srart feature-->
<div class="Feature">       
  <div class="container ">   
      <h2>{{__('company_feature.titles.company_features')}}</h2>
 <div class="container">
    <div class="row">
       
        @foreach($company_features as $company_feature)
        <div class="col-sm">
            <div class="our-feature" data-aos="zoom-in-up">
            <div class="our-feat d-flex justify-content-between pr-3 pl-2">
                   <h3>{{$company_feature->title}}</h3>
                    <img src="{{$company_feature->getImage()}}"/>
            </div>     
                   <p>{{$company_feature->description}}</p>
            </div>
        </div>
        @endforeach
    
       </div>        
    </div>
   </div>        
 </div>
</div>

<!--        end feature-->
<!--        start Require a project-->
<div class="Req-project">
     <div class="container ">
         <h2>{{__('order_step.titles.order_steps')}}</h2>
     <div class="row">
         <div class="col-lg">
          @foreach($order_steps as $order_step)
                <div class="req-pro2 mb-4" data-aos="fade-left">  
                     <h4 class="pr-3"><span class="rounded-circle ml-2 p-2">{{$order_step->number}}</span>{{$order_step->title}}</h4>
                     <p class="mr-5">{{ \Illuminate\Support\Str::limit($order_step->description, 50, '...') }}</p>
                </div>
          @endforeach
            
          </div>
          <div class="col-lg">
             <div class="req-pro" data-aos="fade-up-right">
                <img src="{{$order_steps->first()->getImage()}}" />
             </div>
          </div>
    </div>
         
    </div>
</div>
<!--        end Require a project-->
<!--        start Business-->
  <div class="Business">
     <div class="container ">
         <h2>{{__('project.titles.projects')}}</h2>
       <div class="row">
        @foreach($projects as $project)
            <div class="col-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="{{$project->images->first()->getImage()}}"/>
            </div>
        @endforeach
         
        </div>
    </div>
        
<div class="sec-slider mt-1 mb-5">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                    <h1 class="pr-4" data-aos="fade-down">{{$second_ad->title}}</h1>  
                    <h5 data-aos="fade-down">{{$second_ad->description}}</h5>
                    <button type="button" href="{{$second_ad->link}}" class="btn btn-light mt-2" data-aos="fade-down-left">{{$second_ad->button}}</button>  
                <div class="overlay"></div>
                <div class="item active"></div>
           </div>
        </div>
    </div>
</div>
</div>

<!--        end Business-->
<!--        start blog-->
<div class="blog">
<div class="container ">
    <div class="h-blog d-flex justify-content-between mb-5">
         <h2>{{__('article.titles.articles')}}</h2>
         <h5><a href="{{route('blogs')}}">{{__('lang.show_more')}}</a></h5>
    </div>
    <div class="row mb-5">

        @foreach($articles as $article)
        <div class="col-3">
            <div class="card" data-aos="fade-left">
                  <img class="card-img-top" src="{{$article->getImage()}}" alt="Card image cap">
                <div class="card-body p-2">
                         <h5 class="card-title">{{$article->title}}</h5>
                         <p class="card-text">{{ \Illuminate\Support\Str::limit($article->description, 100, '...') }}</p>
                    <div class="d-flex justify-content-between">   
                         <span class="card-subtitle pr-2"><i class="fas fa-calendar-alt ml-2"></i>{{$article->updated_at}}</span>
                         <h6><a href="{{route('blog.show', $article->id)}}" class="card-link pl-2">{{__('lang.show_more')}}</a></h6>
                    </div>       
              </div>
            </div>      
        </div>
        @endforeach
    </div>        
</div>
<!--        end blog-->
@endsection

@section('script')
  AOS.init({duration:1200});
@endsection
