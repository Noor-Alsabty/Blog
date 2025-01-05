@extends('layouts.app')
@section('title',"update post")
@section('continer')

    <form class="m-5" action=" {{route("update.post",$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <h1>update {{ $post->title }} post</h1> <br>
        <label for="title">The Title :</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}"> <br>
            <label for="description"> The Description:</label> 
                <textarea name="description" id="" cols="30" rows="10" class="form-control"> {{ $post->description }}  </textarea> <br>
                <input type="file" name="image" id="images[]" style="display: none " multiple> 
                <label for="image">
                    @foreach ( json_decode($post->image) as $img)
                    <img src="/images/posts/{{ $img }}" alt="" style="max-width: 40rem">
                    </label> <br> <br> 
                    @endforeach
    <input type="submit" name="send" value="send" class="btn btn-secondary">
        </form>

@endsection