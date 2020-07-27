@extends('layouts.main_layout')


@section('content')
  <!--        start how we-->
        <div class="we">
             <div class="container">
                 <h2>{{__('lang.how_we_are')}}</h2>
                 @foreach($abouts as $about)
                   @if(($about->id % 2) == 0)
                  
                   <div class="row mt-4 mb-5">
                           
                       <div class="col-lg">
                           <div class="one-we bg-white p-2" data-aos="fade-down-left">
                        
                        <h4 class="pr-3">{{$about->title}}</h4>
                           <p>
                           {{$about->description}}                           </p>
                        </div> 
                           
                      </div>
                      <div class="col-lg">
                            <div class="we-img" data-aos="fade-down-right">
                               <img src="{{$about->getImage()}}" />
                           </div>
                      </div>
                    </div>
                    @else
                   
                    <div class="row mt-4 mb-5">
                        <div class="col-lg">
                            <div class="we-img" data-aos="fade-up-left">
                               <img src="{{$about->getImage()}}" />
                           </div>
                      </div>   
                       <div class="col-lg">
                           <div class="two-we bg-white p-5" data-aos="fade-up-right">
                        
                        <h4>{{$about->title}}</h4>
                           <p>
                           {{$about->description}}                           </p>
                        </div> 
                           
                      </div>
                      
                    </div>
                    @endif
                 @endforeach
              </div>
        </div>
<!--        end we-->
@endsection

@section('script')
  AOS.init({duration:1200});
@endsection
