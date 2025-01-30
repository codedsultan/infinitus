<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\MetaService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Show the application dashboard.
     */

     protected $metaService;

     public function __construct(MetaService $metaService)
     {
         $this->metaService = $metaService;
     }

    public function index(Request $request): View
    {
        return view('posts.index', [
            'posts' => Post::search($request->input('q'))
                ->with('author', 'likes')
                ->withCount('comments', 'thumbnail', 'likes')
                ->latest()
                ->paginate(20)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Post $post): View
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
