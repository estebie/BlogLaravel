<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
   public function __construct(){

      $this->middleware('auth');

   }

   public function index(){

   		$posts = Post::latest()->get()->simplePaginate(10);
         //$users = DB::table('users')->paginate(15);
         //return view('user.index', ['users' => $users]);

   		//return view('posts.index', compact('posts'));
         return view('user.index', ['posts' => $post]);

   }

    public function show(Post $post){

   		return view('posts.show', compact('post'));

   }

   public function create(){

   		return view('posts.create');

   }

   public function store(){
   	$tags = request('tags');
   	$this->validate(request(), ['title' => 'required','body'  => 'required', 'tags' => 'required']);
      $post = new Post(request(['title','body']));
      auth()->user()->publish($post);
      $post->tags()->sync($tags);
   	return redirect('/posts');

   }

   public function delete(Post $post){

      $post->delete();
      return redirect('/posts');

   }

   public function editBody(Post $post){

      return view('posts.editPost', compact('post'));

   }

   public function updateData(Post $post){
      $post->body = request('body');
      auth()->user()->publish($post);
      return redirect('/posts');
   }

   public function showUserPosts(){

         $posts = auth()->user()->posts;
         return view('posts.index', compact('posts'));
   }
}

