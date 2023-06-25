<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::whereStatus(true)->with(['category', 'user'])->orderBy('id','desc')->paginate(10);
        $portfolios = Portfolio::orderBy('id','desc')->paginate(10);
        return view('index', compact('posts', 'portfolios'));
    }

    public function formContact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // // Gửi email
        // Mail::send([], [], function ($message) use ($name, $email, $message) {
        //     $message->from(config('mail.from.address'), config('mail.from.name'));
        //     $message->to('<your-email-address>');
        //     $message->subject('New Contact Form Submission');
        //     $message->setBody('Name: ' . $name . '<br>Email: ' . $email . '<br>Message: ' . $message, 'text/html');
        // });
        
        return redirect()->route('contact')->with('status', 200);
    }

}
