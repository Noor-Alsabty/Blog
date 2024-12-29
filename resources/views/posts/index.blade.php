@extends('layouts.app')
@section("title","Posts")
@section("continer")
<a class="m-5 mt-4  btn btn-secondary btn-lg active"  href="{{ route("add.post") }}"> add new post </a> <br> <br>
    @forelse ($p as $post)
        <div class="m-5 mt-2 card border-dark mb-3" style="max-width: 30rem">
            <img class="card-img-top" src="/images/posts/{{ $post->image }}" alt=" ">
            <div class="card-body text-dark">
            <h1 class="card-title">{{ $post->title }}</h1>
            <p class="card-text">{{ $post->description }}</p>
            <p class="card-text"><small class="text-muted"><a href="{{ route("show.post" , $post->id) }}" class="btn btn-secondary"> more about this post</a>
                <a  href="{{ route("edit.post" , $post->id) }}" class="btn btn-secondary"> edit </a>
                <form action="{{ route('destroy.post' , $post->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">delete</button>
                </form> </small></p>
            </div>
        </div>
    @empty
        <h1 class=" text-center">There are no posts</h1>
    @endforelse
@endsection
