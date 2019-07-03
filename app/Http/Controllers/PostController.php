<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Author;
use Illuminate\Http\Request;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']="Post List";
        $data['posts']=Post::with('category','author')->orderBy('id','desc')->get();
        $data['serial']=1;
        return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']="Create new post";
        $data['categories']=Category::orderBy('name')->get();
        $data['authors']=Author::orderBy('name')->get();
        return view('admin.post.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'author_id'=>'required',
            'title'=>'required',
            'details'=>'required',
            'status'=>'required'
        ]);
        $post_r=$request->except('_token');
        //File Upload Start
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            $file->move('images/post/', $file->getClientOriginalName());
            $post_r['file']='images/post/'.$file->getClientOriginalName();
            //dd($post['file']);
        }

        //File Upload End
        Post::create($post_r );
        session()->flash('message','Post created successfully');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data['title']="Edit post";
        $data['post']=$post;
        $data['categories']=Category::orderBy('name')->get();
        $data['authors']=Author::orderBy('name')->get();
        return view('admin.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id'=>'required',
            'author_id'=>'required',
            'title'=>'required',
            'details'=>'required',
            'status'=>'required'
        ]);
        $post_r=$request->except('_token');
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            $file->move('images/post/', $file->getClientOriginalName());
            File::delete($post->file);
            $post_r['file']='images/post/'.$file->getClientOriginalName();
            //dd($post['file']);
        }
        $post->update($post_r);
        session()->flash('message','post updated successfully');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('message','Post deleted successfully');
        return redirect()->route('post.index');
    }
}
