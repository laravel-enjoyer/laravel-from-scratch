<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->filter(
            request(['search', 'category', 'author'])
        )->with('category', 'author')->paginate(6)->withQueryString();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',
            [
                'post' => $post
            ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
//        ddd(request()->file('thumbnail'));


        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => ['required', 'image'],
            'excerpt' => 'required',
            'body' => 'required',
            'slug' => ['required', \Illuminate\Validation\Rule::unique('posts', 'slug')],
            'category_id' => ['required', \Illuminate\Validation\Rule::exists('categories', 'id')],
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/');
    }
}
