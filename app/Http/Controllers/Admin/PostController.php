<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required|unique:posts,title',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);


        $post = Post::create([
            'title' => $request->title,
            'image' => 'image.jpg',
            'content' => $request->content,
            'published_at' => Carbon::now(),
        ]);
        if($request->hasfile('image'))
            {
                $name = rand(111,99999). '.' . $request->image->getClientOriginalExtension();
                $path = public_path() .'/storage/post';
                $request->image->move($path, $name);
                $path = $name;
                $post->save();
            }
        // if($request->hasFile('image')){
        //     $image = $request->image;
        //     $image_new_name = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/posts', $image_new_name);
        //     $post->image = '/public/posts/' . $image_new_name;
        //     $post->save();
        // }
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
