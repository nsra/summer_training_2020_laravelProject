@extends('layouts.main_layout')


@section('content')
<div class="client">
             <div class="container ">
                 <h2>{{__('lang.client_reviews')}}</h2>
                 @foreach($client_reviews as $client_review)
                 <div class="row mt-4 mb-4">
                   
                       <div class="col-lg-3 col-sm-12">
                           <div class="client-img" data-aos="fade-left">
                               <img src="{{$client_review->getImage()}}"/>
                        </div> 
                       </div>      
                 
                      <div class="col-lg-9">
                            <div class="our-client bg-white p-4" data-aos="fade-up-right">
                              <div class="d-flex justify-content-between">
                                <h6>{{$client_review->name}}</h6>
                                <span><i class="fas fa-calendar-alt ml-2"></i>{{$client_review->updated_at}}</span>
                              </div>
                                <p>{{$client_review->review}}</p>
                           </div>
                      </div>
                 </div>
                 @endforeach
                 <div class="com-md-12 text-right">
                        {{$client_reviews->links()}}
                    </div>
        
                </div>
              
          </div>
</div>  
@endsection

@section('script')
  AOS.init({duration:1200});
@endsection
