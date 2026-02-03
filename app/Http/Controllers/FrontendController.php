<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Download;
use Illuminate\Support\Facades\Storage;

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
        $downloads = Download::where('status', 1)
            ->orderBy('order')
            ->latest()
            ->get();

        $downloads->transform(function ($download) {
            if ($download->file && Storage::disk('public')->exists($download->file)) {
                $download->file_url = Storage::disk('public')->url($download->file);
            } else {
                $download->file_url = null;
            }

            $download->file_size_formatted = $download->file_size
                ? humanFileSize($download->file_size)
                : 'N/A';

            return $download;
        });

        return view('frontend.download.index', compact('downloads'));
    }

    public function downloadFile($slug)
    {
        $download = Download::where('slug', $slug)->firstOrFail();

        if (!$download->file || !Storage::disk('public')->exists($download->file)) {
            abort(404, 'File not found');
        }
        $download->increment('views');

        return Storage::disk('public')->download(
            $download->file,
            $download->name . '.pdf'
        );
    }
}
