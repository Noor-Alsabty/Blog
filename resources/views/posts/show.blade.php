@extends('layouts.app')

@section('title',"show a post")

@section("continer")
<div class="m-5 card border-dark mb-3" style="max-width: 30rem">
    <img class="card-img-top" src="/images/posts/{{ $post->image }}" alt=" ">
    <div class="card-body text-dark">
    <h1 class="card-title">{{ $post->title }}</h1>
    <p class="card-text">{{ $post->description }}</p>
    <p>added at:{{ $post->created_at }}</p>
        <a href="{{ route("posts.index") }}" class="btn btn-secondary"> Back </a>
    </div>
</div>
@endsection



{{-- <h1>title:{{ $post->title }} </h1>
<p>description:{{ $post->description }}</p>
<img src="/images/posts/{{ $post->image }}" alt="" style="max-width: 40rem">
<p>added at:{{ $post->created_at }}</p>
<a href="{{ route("posts.index") }}"> Back </a> --}}

