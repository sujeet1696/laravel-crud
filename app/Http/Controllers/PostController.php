<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Post;
use Cookie;

class PostController extends Controller
{
    public function index(Request $request)
    {
      // $flights = Post::find([41,42,43,44,45,46,50,60,62]);
      // dd($flights);
      $msg = ['heading' => 'PHP CRUD OPERATION USING LARAVEL'];
      session($msg);
        // $posts = post::orderBy('created_at','desc')->get();
        // $posts = post::->get();
        // $posts = post::all();
        // $posts = post::paginate(5);
        $posts = post::latest()->Simplepaginate(5);
        // $posts = post::latest()->paginate(10);
        return view('post.index',compact('posts'));
        // return view('post.index', ['posts' => $posts]);
    }

    public function insert(Request $request) {
      if(!empty($request)) {
        $data = ['title' => $request->input('title', 'Title not found'), 'content' => $request->input('content', 'Content not found')];
        $data = $request->all();
        $created_data =Post::create($data);
        // dd($created_data);
        // $post = new Post($data);
        // $post->save();
        echo "<script>alert('data saved successfully.');</script>";
        return redirect()->route('posts.index');
      } else {
        echo "<script>alert('params required.');</script>";
        return redirect()->route('posts.index');
      }
    }

    public function edit($id) {
      $posts = post::find($id);

      return view('post.demo', ['data' => $posts]);

    }

    public function delete($id) {
      if (!empty($id)) {
        // $data = Post::find($id)->delete();
        // $data = Post::where('id',$id)->delete();
        $data = Post::destroy($id);
        // dd($data);
        echo "<script>alert('Succesfully deleted.');</script>";
      } else {
        echo "<script>alert('params required.');</script>";
      }
      return redirect()->route('posts.index');
    }

    public function add() {
      $arr = ['id' => 'id', 'title' => '', 'content' => ''];
      $data = (object)$arr;
      return view('post.demo', ['data' => $data]);
    }

    public function update(Request $request)
    {
      if (!empty($request)) {
        $data = $request->all();
        $id = $request->input('id');
        Post::find($id)->update($data);
        echo "string";
        echo "<script>alert('Succesfully updated.');</script>";

      } else {
        echo "<script>alert('params required.');</script>";
      }
      return redirect()->route('posts.index');
    }

    public function home() {
      return view('post.home',['msg' => "welcome<br>crud operation in laravel"]);
    }

    public function logout() {
      session()->flush();
      return view('post.home',['msg' => "You are successfully logeded out"]);
    }

    public function login() {
      return view('post.login');
    }

    public function test() {
      return $this->hasMany('App\Patient');
    }

    public function signUp() {
      return viwe('signup');
    }

}
