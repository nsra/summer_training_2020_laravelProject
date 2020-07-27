@extends('layouts.main_layout')


@section('content')
<div class="client">
             <div class="container ">
                 <h2>{{__('lang.working_team')}}</h2>
                 @foreach($working_teams as $working_team)
                 <div class="row mt-4 mb-4">
                   
                       <div class="col-lg-3 col-sm-12">
                           <div class="client-img" data-aos="fade-left">
                               <img src="{{$working_team->getImage()}}"/>
                        </div> 
                       </div>      
                 
                      <div class="col-lg-9">
                            <div class="our-client bg-white p-4" data-aos="fade-up-right">
                              <div class="d-flex justify-content-between">
                                <h6>{{$working_team->name}}</h6>
                                <span><i class="fas fa-calendar-alt ml-2"></i>{{$working_team->updated_at}}</span>
                              </div>
                                <p>{{$working_team->bio}}</p>
                           </div>
                      </div>
                 </div>
                 @endforeach
                 <div class="com-md-12 text-right">
                        {{$working_teams->links()}}
                    </div>
        
                </div>
               
          </div>
</div>  
@endsection

@section('script')
  AOS.init({duration:1200});
@endsection
