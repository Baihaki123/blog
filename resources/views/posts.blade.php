@extends('layouts.main')

@section('content')
@foreach ($posts as $post)
<article class="mb-5" style="text-align: justify;">
    <h2>
        <a href="/post/{{ $post["slug"] }}"> {{ $post["title"]  }} </a>
    </h2>
    <h5>By: {{ $post["author"] }} </h5>
    <p> {{ $post["body"] }} </p>
</article>
@endforeach
@endsection