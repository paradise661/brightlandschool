<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home.index');
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function message()
    {
        return view('frontend.message.index');
    }

    public function curriculum()
    {
        return view('frontend.curriculum.index');
    }

    public function event()
    {
        return view('frontend.event.index');
    }

    public function facilities()
    {
        return view('frontend.facilities.index');
    }

    public function gallery()
    {
        return view('frontend.gallery.index');
    }

    public function blog()
    {
        $blogs = Post::with('category')
            ->where('status', 1)
            ->orderBy('order', 'asc')
            ->get();

        return view('frontend.blog.index', compact('blogs'));
    }
    public function showblog($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $viewKey = 'post_viewed_' . $post->id;
        if (!session()->has($viewKey)) {
            $post->increment('views');
            session()->put($viewKey, true);
        }
        $popular_post = Post::where('status', 1)
            ->orderByDesc('views')
            ->take(3)
            ->get();

        return view('frontend.blog.show', compact('post', 'popular_post'));
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function admission()
    {
        return view('frontend.admission.index');
    }
    public function downloads()
    {
        return view('frontend.download.index');
    }
}
