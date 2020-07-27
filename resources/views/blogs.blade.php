@extends('layouts.main_layout')


@section('content')
<div class="blog">
    <div class="container ">

            <div class="h-blog d-flex justify-content-between mb-5">
                 <h2>{{__('lang.blog')}}</h2>
            </div>
            <div class="row mb-5 ">
            @foreach($blogs as $blog)
                <div class="col-3" style="margin-bottom:2%"> 
                    <div class="card" data-aos="zoom-in-up">
                          <img class="card-img-top" src="{{$blog->getImage()}}" alt="Card image cap">
                        <div class="card-body p-2">
                                 <h5 class="card-title">{{$blog->title}}</h5>
                                 <p class="card-text">{{ \Illuminate\Support\Str::limit($blog->description, 100, '...') }}</p>
                            <div class="d-flex justify-content-between">   
                                 <span class="card-subtitle pr-2"><i class="fas fa-calendar-alt ml-2"></i>{{$blog->updated_at}}</span>
                                 <h6><a href="{{route('blog.show', $blog->id)}}" class="card-link pl-2">{{__('lang.show_more')}}</a></h6>
                            </div>       
                      </div>
                    </div>      
                </div>
            @endforeach
            </div>
            <div class="com-md-12 text-right">
                        {{$blogs->links()}}
                    </div>
            </div>
            </div>
@endsection

@section('script')
  AOS.init({duration:1200});
@endsection
