<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    public function index()
    {
        $posts = config('blogs.posts', []);

        // Transform for listing cards (and sort by date desc if present)
        $list = collect($posts)
            ->map(fn($p, $slug) => [
                'slug'  => $slug,
                'title' => $p['title'] ?? $slug,
                'date'  => $p['date'] ?? null,
                'image' => $p['image'] ?? null,
                'intro' => $p['intro'] ?? null,
            ])
            ->sortByDesc(fn($i) => $i['date'] ?? '1970-01-01')
            ->values()
            ->all();

        return view('content.pages.blog', compact('list'));
    }

    public function show(string $slug)
    {
        $posts = config('blogs.posts', []);
        $post  = $posts[$slug] ?? null;

        abort_if(!$post, 404);

        return view('content.pages.blog_details', [
            'slug'  => $slug,
            'post'  => $post,
            'posts' => $posts,
        ]);
    }
}
