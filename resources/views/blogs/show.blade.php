@extends('blogs.main')

@section('content')
<div class="col-md-10">
  <h1>show blog</h1>
<p>{{$blog->id}}</p>
<hr>
<p>{{$blog->user_id}}</p>
<hr>

<p>{{$blog->title}}</p>
<hr>

<p>{{$blog->description}}</p>
<hr>

<p>{{$blog->created_at}}</p>

</div>
@endsection