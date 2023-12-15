<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class ForumController extends Controller
{
     public function showAllPosts()
    {
        $posts = Post::with('user', 'comments.user')->get();
        
        return view('forum.all_posts', compact('posts'));
    }
    public function index()
    {
        return view('forum.index');
    }

    public function showPost($postId)
    {
        return view('forum.post', ['postId' => $postId]);
    }

    public function createPost()
{
    return view('forum.create_post');
}

public function storePost(Request $request)
{
 
    $request->validate([
        'subject' => 'required|max:255',
        'content' => 'required',
    ]);

   
    $post = new Post;
    $post->user_id = auth()->id();
    $post->subject = $request->input('subject');
    $post->content = $request->input('content');
    $post->save();

    return redirect()->route('dashboard')->with('success', 'Post succesvol aangemaakt!');
}
}
