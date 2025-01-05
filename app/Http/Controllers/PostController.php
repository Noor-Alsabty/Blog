<?php
namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $p= Post::all();
        return view ("posts.index" , compact("p"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $images=[];
    if($request->hasFile("images")){
                foreach($request->File('images') as $image ){
                $imageName = $image->getClientOriginalName().'-'. $image->getClientOriginalExtension();
                $image->move(public_path("/images/posts") , $imageName);
                $images[]=$imageName;
            }
            
            Post::create([
                    "title" => $request->title,
                    "description" => $request->description,
                    "image" =>json_encode($images) 
                        ]);
            return redirect() -> route("posts.index");
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("posts.show" ,compact("post") );
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Post $post)
    {
            return view('posts.edit',compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if($request->hasFile("images")){
        foreach(($request->File('images')) as $image ){
    $imageName = $image->getClientOriginalName() . "-" . time() . $image->getClientOriginalExtension();
    $image->move(public_path("/images/posts") , $imageName);
        }
    }
    else{
        $imageName= [$post->image];
    }
        $post->update([
            "title" => $request->title,
            "description" => $request->description,
            'image' => $imageName
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
