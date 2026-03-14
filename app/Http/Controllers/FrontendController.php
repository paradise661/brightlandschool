<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\StoreStudentsRequest;
use App\Models\Academy;
use App\Models\Album;
use App\Models\Contacts;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Download;
use App\Models\DownloadCategory;
use App\Models\Event;
use App\Models\Notice;
use App\Models\NoticeCategory;
use App\Models\Page;
use App\Models\PageItem;
use App\Models\PopUp;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Student;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class FrontendController extends Controller
{
    public function home()
    {
        $pageWhyChooseUs = Page::where('slug', 'why-choose-us')->first();
        $whyChooseUsItems = $pageWhyChooseUs ? $pageWhyChooseUs->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();

        $academy = Academy::where('status', 1)->orderBy('order', 'asc')->take(3)->get();

        $popups = PopUp::where('status', 1)->orderBy('order', 'asc')->get();

        $reviews = Review::where('status', 1)->orderBy('order', 'asc')->get();

        $pageChairman = Page::where('slug', 'message-from-teachers')->first();
        $chairmanItems = $pageChairman ? $pageChairman->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();

        $pageFacilities = Page::where('slug', 'academic-facilities')->first();
        $facilitiesItems = $pageFacilities ? $pageFacilities->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();

        $albums = Album::where('status', 1)->orderBy('order', 'asc')->take(8)->get();
        $blogs = Post::with('category')
            ->where('status', 1)
            ->orderBy('order', 'asc')->take(3)->get();

        // Fetch the Vision, Mission & Values section
        $vmvPage = Page::where('slug', 'vision-mission-values')->first();
        $vmvItems = $vmvPage ? $vmvPage->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();

        $notices = Notice::with('category')->where('status', 1)->orderBy('order', 'asc')->get();
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();

        return view('frontend.home.index', compact('sliders', 'notices', 'vmvItems', 'vmvPage', 'blogs', 'albums', 'facilitiesItems', 'pageFacilities', 'pageChairman', 'chairmanItems', 'reviews', 'popups', 'academy', 'pageWhyChooseUs', 'whyChooseUsItems'));
    }

    public function about()
    {
        $pageWhyChooseUs = Page::where('slug', 'why-choose-us')->first();
        $whyChooseUsItems = $pageWhyChooseUs ? $pageWhyChooseUs->items()->where('status', 1)->orderBy('order', 'asc')->take(6)->get() : collect();

        // Fetch the Vision, Mission & Values section
        $vmvPage = Page::where('slug', 'vision-mission-values')->first();
        $vmvItems = $vmvPage ? $vmvPage->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();

        $teams = Team::where('status', 1)->orderBy('order', 'asc')->take(4)->get();

        return view('frontend.about.index', compact('teams', 'vmvPage', 'vmvItems', 'pageWhyChooseUs', 'whyChooseUsItems'));
    }

    public function message($itemSlug)
    {
        // Fetch the message by its slug
        $item = PageItem::where('slug', $itemSlug)
            ->where('status', 1)
            ->firstOrFail();

        return view('frontend.message.index', compact('item'));
    }

    public function academics($slug)
    {
        $academy = Academy::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $popular_academy = Academy::where('status', 1)->orderBy('order', 'asc')->take(5)->get();

        return view('frontend.academics.index', compact('academy', 'popular_academy'));
    }

    public function event()
    {

        $events = Event::with('category')->where('status', 1)->orderBy('order', 'asc')->get();
        $popular_events = Event::with('category')->where('status', 1)->orderByDesc('views')->take(4)->get();


        return view('frontend.event.index', compact('events', 'popular_events'));
    }
    public function eventShow($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $viewKey = 'event_viewed_' . $event->id;
        if (!session()->has($viewKey)) {
            $event->increment('views');
            session()->put($viewKey, true);
        }
        $popular_events = Event::where('status', 1)
            ->orderByDesc('views')
            ->take(4)
            ->get();

        return view('frontend.event.show', compact('event', 'popular_events'));
    }

    public function facilities()
    {
        $pageFacilities = Page::where('slug', 'academic-facilities')->first();
        $facilitiesItems = $pageFacilities ? $pageFacilities->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();

        $sportFacilities = Page::where('slug', 'sports-recreation-facilities')->first();
        $sportFacilitiesItems = $sportFacilities ? $sportFacilities->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();

        $supportFacilities = Page::where('slug', 'support-wellness-facilities')->first();
        $supportFacilitiesItems = $supportFacilities ? $supportFacilities->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();

        return view('frontend.facilities.index', compact('facilitiesItems', 'pageFacilities', 'sportFacilitiesItems', 'sportFacilities', 'supportFacilitiesItems', 'supportFacilities'));
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

        $popular_blogs = Post::with('category')
            ->where('status', 1)
            ->orderByDesc('views')
            ->take(4)
            ->get();

        return view('frontend.blog.index', compact('blogs', 'popular_blogs'));
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
        $pageWhyChooseUs = Page::where('slug', 'why-choose-us')->first();
        $whyChooseUsItems = $pageWhyChooseUs ? $pageWhyChooseUs->items()->where('status', 1)->orderBy('order', 'asc')->take(5)->get() : collect();
        return view('frontend.contact.index', compact('pageWhyChooseUs', 'whyChooseUsItems'));
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

            // File uploads
            $files = ['student_photo', 'birth_certificate', 'last_report_card', 'transfer_certificate', 'character_certificate'];
            foreach ($files as $file) {
                if ($request->hasFile($file)) {
                    $data[$file] = fileUpload($request, $file, 'Admission');
                }
            }

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


    public function showPageSection($slug)
    {
        $item = PageItem::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        return view('frontend.pages.show', compact('item'));
    }

    public function reviews()
    {
        $reviews = Review::where('status', 1)->orderBy('order', 'asc')->get();

        return view('frontend.reviews.index', compact('reviews'));
    }

    public function teachers()
    {
        $teams = Team::where('status', 1)->orderBy('order', 'asc')->get();

        return view('frontend.teams.index', compact('teams'));
    }
}
