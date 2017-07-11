<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
	public function store(Post $post){

		$this->validate(request(), ['body' => 'required|min:2']);
		$comment = new Comment;
		$comment->body= request('body');
		$comment->post_id=$post->id;
		auth()->user()->addUserComment($comment);
		return back();

	}

}
