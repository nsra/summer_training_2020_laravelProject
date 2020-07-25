@extends('layouts.main_layout')

@section('content')
  <!--        start slider-->
                
  <div class="slider">
    <div class="container">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <h1 data-aos="fade-down">شركة اڨوكود</h1>  
                <h4 data-aos="fade-down">نسعى لخدماتكم في تطوير المواقع والتطبيقات</h4>
                <button type="button" class="btn btn-light mt-4" data-aos="fade-down-left">اطلب خدمة</button>  
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
        
        <!-- <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="services text-center" data-aos="zoom-in-up">
            <img src="{{asset('/avocodetemplate/image/icons2.svg')}}" />
            <p>تطوير وبرمجة التطبيقات</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="services text-center" data-aos="zoom-in-up">
            <img src="{{asset('/avocodetemplate/image/icons3.svg')}}" />
            <p>التصميم والمونتاج</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="services text-center" data-aos="zoom-in-up">
           <img src="{{asset('/avocodetemplate/image/icons4.svg')}}" />
                 <p>التسويق الإلكتروني</p>
          </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="services text-center" data-aos="zoom-in-up">
                <img src="{{asset('/avocodetemplate/image/icons5.svg')}}"/>
                <p>دراسات الجدوى</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="services text-center" data-aos="zoom-in-up">
                <img src="{{asset('/avocodetemplate/image/icons6.svg')}}" />
                <p>استضافة المواقع</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="services text-center" data-aos="zoom-in-up">
            <img src="{{asset('/avocodetemplate/image/icons7.svg')}}"/>
            <p>سيرفرات خاصة</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="services text-center" data-aos="zoom-in-up">
           <img src="{{asset('/avocodetemplate/image/icons8.svg')}}"/>
           <p>متجر التطبيقات</p>
          </div>
        </div>
  </div>
</div> -->
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
         <h2>كيف تطلب مشروعك</h2>
     <div class="row">
         <div class="col-lg">
                <div class="req-pro2 mb-4" data-aos="fade-left">  
                     <h4 class="pr-3"><span class="rounded-circle ml-2 p-2">1</span> تقديم الطلب</h4>
                     <p class="mr-5">عن طريق الضغط على زر طلب خدمة وكتابة كافة تفاصيل مشروعك</p>
                </div>
                <div class="req-pro2 mb-4" data-aos="fade-left">  
                     <h4 class="pr-3"><span class="rounded-circle ml-2 p-2">2</span> تقديم الطلب</h4>
                     <p class="mr-5">عن طريق الضغط على زر طلب خدمة وكتابة كافة تفاصيل مشروعك</p>
                </div>
                <div class="req-pro2 mb-4" data-aos="fade-left">  
                     <h4 class="pr-3"><span class="rounded-circle ml-2 p-2">3</span> تقديم الطلب</h4>
                     <p class="mr-5">عن طريق الضغط على زر طلب خدمة وكتابة كافة تفاصيل مشروعك</p>
                </div>
                   <div class="req-pro2" data-aos="fade-left">  
                     <h4 class="pr-3"><span class="rounded-circle ml-2 p-2">4</span> تقديم الطلب</h4>
                     <p class="mr-5">عن طريق الضغط على زر طلب خدمة وكتابة كافة تفاصيل مشروعك</p>
                   </div>
          </div>
          <div class="col-lg">
             <div class="req-pro" data-aos="fade-up-right">
                <img src="{{asset('/avocodetemplate/image/req-pro.png')}}" />
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
            @foreach($images as $image)
                <img src="{{$image->project_id','project')}}"/>
                <!-- <img src="{{asset('/avocodetemplate/image/2.png')}}"/> -->
            </div>
        @endforeach
            <!-- <div class="col-sm" data-aos="flip-left"
data-aos-easing="ease-out-cubic"
data-aos-duration="2000">
                    <img src="{{asset('/avocodetemplate/image/2.png')}}"/>
            </div>  
            <div class="col-sm" data-aos="flip-left"
data-aos-easing="ease-out-cubic"
data-aos-duration="2000">
                    <img src="{{asset('/avocodetemplate/image/3.png')}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm" data-aos="flip-left"
data-aos-easing="ease-out-cubic"
data-aos-duration="2000">
                    <img src="{{asset('/avocodetemplate/image/4.png')}}"/>
            </div>

            <div class="col-sm" data-aos="flip-left"
data-aos-easing="ease-out-cubic"
data-aos-duration="2000">
                    <img src="{{asset('/avocodetemplate/image/5.png')}}"/>
            </div>  
            <div class="col-sm" data-aos="flip-left"
data-aos-easing="ease-out-cubic"
data-aos-duration="2000">
                    <img src="{{asset('/avocodetemplate/image/6.png')}}"/>
            </div> -->
        </div>
    </div>
        
<div class="sec-slider mt-1 mb-5">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                    <h1 class="pr-4" data-aos="fade-down">هل تريد إنشاء شركة برمجيات؟</h1>  
                    <h5 data-aos="fade-down">هل تريد لهذه الفكره أن تظهر للعالم؟ إذا, ماذا تنتظر؟</h5>
                    <h5 class="mr-5" data-aos="fade-down"> لا تدع الفرصة تضيع من بين يديك!</h5>
                    <button type="button" class="btn btn-light mt-2" data-aos="fade-down-left">اطلب خدمة</button>  
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
         <h5><a href="#">{{__('lang.show_more')}}</a></h5>
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
                         <h6><a href="many-other-blog.html" class="card-link pl-2">{{__('lang.show_more')}}</a></h6>
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
