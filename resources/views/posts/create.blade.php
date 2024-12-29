@extends('layouts.app')
@section("title","add new post")
@section('continer')
    
        <form class="m-5" action=" {{route("store.post")}} " method="POST" enctype="multipart/form-data">
        @csrf
        <h1>add new post</h1> <br>
        <label for="title">The Title :</label>
            <input type="text" name="title" class="form-control"> <br>
            <div class="form-group"><label for="description"> The Description:</label> 
                <textarea name="description" id="" cols="30" rows="10" class="form-control">  </textarea></div> <br>
                <div class="form-group"><input type="file" name="image"> </div> <br><br>
    <input type="submit" name="send" value="send" class="btn btn-secondary">
        </form>

@endsection