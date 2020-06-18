@extends('blogs.main')

@section('content')
<br>
<br>
<br>
@foreach ($blogs as $blog)

<div class="col-md-6">
       
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <a class="d-inline-block mb-2 text-primary" href="/blog/{{$blog->id}}">{{ $blog->title }}</strong>
            <h3 class="mb-0">
            <a class="text-dark" href="#">{{  $blog->user_id }}</a>
            </h3>
            <div class="mb-1 text-muted">{{ $blog->created_at }}</div>
            <p class="card-text mb-auto">{{  $blog->description }}</p>
            <a href="#">Continue reading</a>
        </div>
        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
    </div>

</div>
@endforeach

@endsection