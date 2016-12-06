<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);
        $events = Event::orderBy('id','desc'->paginate(10);

        return view('admin.index', compact('posts','events'));
    }
}
