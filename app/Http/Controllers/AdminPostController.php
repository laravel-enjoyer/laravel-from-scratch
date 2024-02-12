<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {
        strrev('xd');
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }
}
