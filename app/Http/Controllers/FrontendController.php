<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\StoreStudentsRequest;
use App\Models\Album;
use App\Models\Contacts;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Download;
use App\Models\DownloadCategory;
use App\Models\Notice;
use App\Models\NoticeCategory;
use App\Models\Slider;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;


class FrontendController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();
        return view('frontend.home.index', compact('sliders'));
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
        $albums = Album::where('status', 1)
            ->orderBy('order', 'asc')
            ->withCount('galleries')
            ->with(['galleries' => function ($query) {
                $query->latest()->take(4);
            }])
            ->get();

        return view('frontend.gallery.index', compact('albums'));
    }




    public function albumShow($slug)
    {
        $album = Album::where('slug', $slug)->with('galleries')->firstOrFail();
        return view('frontend.gallery.show', compact('album'));
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
    public function contactStore(StoreContactsRequest $request)
    {
        Contacts::create($request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!',
        ]);
    }

    public function admission()
    {

        return view('frontend.admission.index');
    }
    public function studentStore(StoreStudentsRequest $request)
    {
        try {
            $data = $request->validated();

            // Single file uploads (safe)
            if ($request->hasFile('birth_certificate')) {
                $data['birth_certificate'] = fileUpload($request, 'birth_certificate', 'birth_certificates');
            }

            if ($request->hasFile('student_photo')) {
                $data['student_photo'] = fileUpload($request, 'student_photo', 'student_photos');
            }

            if ($request->hasFile('transfer_certificate')) {
                $data['transfer_certificate'] = fileUpload($request, 'transfer_certificate', 'transfer_certificates');
            }

            if ($request->hasFile('academic_records')) {
                $data['academic_records'] = fileUpload($request, 'academic_records', 'academic_records');
            }

            // Multiple files upload
            if ($request->hasFile('passport_photos')) {
                $data['passport_photos'] = multiFileUpload($request, 'passport_photos', 'passport_photos');
            }
            // JSON field
            $data['source'] = json_encode($data['source'] ?? []);

            Student::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Student saved successfully!'
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }


    public function downloads()
    {
        $downloads = Download::with('category')->where('status', 1)->get();

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
        $categories = DownloadCategory::where('status', 1)->orderBy('order', 'asc')->get();

        return view('frontend.download.index', compact('downloads', 'categories'));
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

    public function notice()
    {
        $notices = Notice::with('category')
            ->where('status', 1)
            ->orderBy('order', 'asc')
            ->get();

        $category = NoticeCategory::where('status', 1)
            ->withCount([
                'notices' => function ($q) {
                    $q->where('status', 1);
                }
            ])
            ->orderBy('order', 'asc')
            ->get();

        return view('frontend.notice.index', compact('notices', 'category'));
    }
    public function incrementNoticeView(Notice $notice)
    {
        $sessionKey = 'notice_viewed_' . $notice->id;

        if (!session()->has($sessionKey)) {
            $notice->increment('views');
            session()->put($sessionKey, true);
        }

        return response()->json([
            'views' => $notice->views
        ]);
    }
}
