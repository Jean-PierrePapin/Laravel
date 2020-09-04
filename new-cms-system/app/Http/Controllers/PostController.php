<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    //

    public function index() {

        //$posts = auth()->user()->posts;
        $posts = Post::all();

        return view('admin.posts.index', ['posts'=>$posts]);

    }

    public function show( Post $post ) {

        return view('blog-post', ['post' => $post]);

    }

    public function create() {

        return view('admin.posts.create');

    }

    public function store() {

       $inputs = request()->validate([
           'title' => 'required|min:8|max:255',
           'post_image' => 'file',
           'body' => 'required'
       ]);

       if(request('post_image')) {
            $inputs['post_image'] = request('post_image')->store('images');
        }

        // Save the post as the username which is updating the post
        // auth()->user()->posts()->create($inputs);

        // Save the post without changing the owner
        $post->save();

        session()->flash('post-created-message', 'Post with title was created ' .$inputs['title']);

        return redirect()->route('post.index');

    }

    public function edit(Post $post) {

       
        return view('admin.posts.edit', ['post'=>$post]);

    }

    public function destroy(Post $post) {

        $post->delete();

        Session::flash('message', 'Post was deleted');

        return back();

    }

    public function update(Post $post) {

        $inputs = request()->validate([
            'title' => 'required|min:8|max:255',
            'post_image' => 'file',
            'body' => 'required'
        ]);

        
 
        if(request('post_image')) {
            $inputs['post_image'] = request('post_image')->store('images');
            $post->post_image = $inputs['post_image'];
        }

        $post->title = $inputs['title'];
        $post->body = $inputs['body'];

        /* auth()->user()->posts()->save($post); */

        $this->authorize('update', $post);

        $post->save();

        session()->flash('post-updated-message', 'Post with title was updated ' .$inputs['title']);

        return redirect()->route('post.index');

    }
}
