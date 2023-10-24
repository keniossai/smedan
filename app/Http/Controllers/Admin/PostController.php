<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());


        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

          $imageName = rand(111,99999) . '.' . $request->image->extension();
          $request->image->storeAs('/storage/post', $imageName);
          $request->image->move(public_path('storage/post/'), $imageName);

          $data = ['title' => $request->title, 'content' => $request->content, 'image' => $imageName];

          Post::create($data);

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
