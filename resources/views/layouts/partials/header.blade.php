<!--        start upper navbar-->
<div class="upper-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
          </button> 
           <div class="collapse navbar-collapse" id="main-nav">    
           <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">{{__('lang.home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('lang.privacy_policy')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('lang.laws_and_provisions')}}</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blogs')}}">{{__('lang.blog')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('lang.about_site')}}</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('workingteam')}}">{{__('lang.working_team')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about_us')}}">{{__('lang.how_we_are')}}</a>    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('clientreviews')}}">{{__('lang.client_reviews')}}</a>    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('lang.contact_us')}} </a>    
                </li>
            </ul>
          </div>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
        </button>    
          <div class="collapse navbar-collapse" id="nav">      
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitter" ></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#"><i class="fab fa-instagram" ></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-search" ></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#"><i class="fa fa-bell" ></i></a>
                </li>
               
                @if(Auth::guard('admin')->check() || Auth::guard('web')->check())
                    @auth('admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin_profile.edit')}}"><i class="fa fa-user"><span>{{ Auth::guard('admin')->user()->name }}</span></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout.custom')}}"><i class="fas fa-sign-out-alt" ></i></a>
                        </li>
                    @elseauth('web')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user_profile.update')}}"><i class="fa fa-user"><span>{{ Auth::guard('web')->user()->name }}</span></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout.custom')}}"><i class="fas fa-sign-out-alt" ></i></a>
                        </li>
                    @endauth
                   
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('multiguard_login')}}">{{__('lang.login')}}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('lang.register') }}</a>
                        </li>
                    @endif
                @endif
                <li class="dropdown" style="margin-top:3%">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <span class="username username-hide-on-mobile">
                            @if(app()->getLocale() == 'ar')
                                <img alt="" src="{{asset('avocodetemplate/image/flags/eg.png')}}">
                            @else
                                <img alt="" src="{{asset('avocodetemplate/image/flags/us.png')}}">
                            @endif
                            {{app()->getLocale() == 'en' ? 'english' : 'العربية'}}
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{route('language.change',['lang' => 'ar'])}}">
                                <img alt="" src="{{asset('avocodetemplate/image/flags/eg.png')}}">
                                arabic
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{route('language.change',['lang' => 'en'])}}">
                                <img alt="" src="{{asset('avocodetemplate/image/flags/us.png')}}">
                                english
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>         
        </nav>
    </div>        
<!--        end upper navbar-->
<!--         start avocode -->
       <div class="avc">
        
         @if(app()->getLocale() == 'ar')
        <div class="d-flex flex-nowrap">
            <img src="{{asset('/control/assets/layouts/layout/img/toptech.jpg')}}" style="width:40px" class="mr-5"/> 
            <h6 class="mr-2 mt-2">{{$company->name}}</h6>
        </div>
        @else

        <div class="d-flex flex-nowrap">
            <img src="{{asset('/control/assets/layouts/layout/img/toptech.jpg')}}" style="width:40px" class="ml-5"/> 
            <h6 class="mr-2 mt-2">{{$company->name}}</h6>
        </div>
        @endif

       </div>
    
    <!-- end avocode--> 
        <!--        start second navbar--> 
   <div class="sec-nav">
     <div class="container-fluid">
         <nav class="navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">الرئيسية</a>
                </li>
                 -->
                @foreach($service_types as $service_type)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{$service_type->name}}</a>
                    </li>
                @endforeach

            </ul>
             </div>      
          </nav>     
        </div>
      </div>        
<!--        end second navbar--> 