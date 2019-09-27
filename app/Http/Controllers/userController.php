<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Cookie;
use Mail;

class userController extends Controller
{
  public function forgotPassword(Request $request) {
    if ($request->input('password') != $request->input('confirm_password')) {
      $data = (object)[
                      'email' => $request->input('email'),
                      'msg' => '<script>alert("password and confirm_password must be same")</script>'
                        ];
      return view('forgotPassword', ['data' => $data]);
    } else {
      $updated_data = User::where('email',$request->input('email'))->update(['password'=>$request->input('password')]);
      if ($updated_data > 0) {
        // return redirect('/')->with('msg', '<script>alert("password updated successfully.")</script>');
        return redirect('/login')->with('msg', '<script>alert("password updated successfully.")</script>');
      } else {
        dd('unable to update user password');
      }
    }
  }

  public function sendEmail(Request $request) {
    try {
      $email = $request->input('email');
      if (!empty($email)) {
        $data =Mail::send(['text'=>'email_data'],['name','Sujeet kumar'], function($message) {
          $message->to('dhruv.gupta@ksolves.com','To sujeet')->subject('Test Email');
          $message->from('sujeet.kumar@ksolves.com','Sujeet Kumar');
        });
      }
      return redirect('/')->with('msg', '<script>alert("Password reset link sent to your email.")</script>');
    } catch (Exception $e) {
      return redirect('/');
    }

  }

  public function resetpassword(Request $request) {
    return view('reset_password');
  }

  public function emailVarify(Request $request) {
    $prev_data = User::select('email')->where('email',$request->input('email'))->first();
    if (!empty($prev_data)) {
      return view('forgotPassword',['data'=>$prev_data]);
    } else {
      return redirect()->back()->with('msg', '<script>alert("Email not exits.")</script>');
    }

    dd($prev_data->email);
  }

  public function add(Request $request) {
    $data = $request->all();
    $prev_data = User::where('email',$data['email'])->first();
    if (!empty($prev_data)) {
      return redirect()->back()->with('msg', '<script>alert("email already exits.")</script>');
    } else {
      if ($data['password'] !== $data['confirm_password']) {
        return redirect()->back()->with('msg', '<script>alert("password and confirm_password must be same")</script>');
      } else {

        try {
          $created_data = User::create($data);
          return redirect()->action('PostController@login')
          ->withCookie(Cookie::make('user_email',$data['email'],1))               //saved for one minute
          ->withCookie(Cookie::make('user_password',$data['password'],1));
        } catch (Exception $e) {
          return redirect('/signUp');
        }
      }
    }
  }

  public function verify(Request $request) {
    $data = $request->all();
    $verified_data = User::select(['name','email','password'])
                          ->where(['email'=>$data['email'], 'password'=>$data['password']])
                          ->first();

    if (!empty($verified_data)) {
      session($verified_data->toArray());
      if (isset($data['customCheck'])) {
        $response = new Response(view('home'));
        $response->withCookie(cookie('user_email', $verified_data->email, 60));
        $response->withCookie(cookie('user_password', $verified_data->password, 60));
        return $response;
      } else {
          return view('home');
      }
    } else {
      return view('post.home',['msg' => "<font color='red'>Incorrect email or password..</font>"]);
    }
  }
}
