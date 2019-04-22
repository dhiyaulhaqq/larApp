<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PagesController extends Controller
{
    public function index()
    {
        if( auth()->user() ){
            $name = auth()->user()->name;
        } else {
            $name = 'Guest';
        }

        $posts = Post::orderby('created_at', 'desc')->paginate(3);

        $data = [
            'name' => $name,
            'posts' => $posts
        ];

        return view('pages.index')->with($data);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $services = [
            'Service 1',
            'Service 2',
            'Service 3',
        ];
        return view('pages.services')->with('services', $services);
    }
}
