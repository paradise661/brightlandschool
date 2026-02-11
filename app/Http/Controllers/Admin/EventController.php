<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 1)
            ->orderBy('order', 'ASC')
            ->paginate(10);


        return view('admin.events.index', compact('events'));
    }


    public function create()
    {
        $categories = EventCategory::orderBy('name')->get();
        return view('admin.events.create', compact('categories'));
    }


    public function store(StoreEventRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'event');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'banner_event');
        $input['slug'] = Str::slug($request->name);
        Event::create($input);
        return redirect()->route('event.index')->with('message', 'Created Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit(Event $event)
    {
        $categories = EventCategory::orderBy('name')->get();
        return view('admin.events.edit', compact('event', 'categories'));
    }


    public function update(UpdateEventRequest $request, Event $event)
    {
        $input = $request->all();
        $old_image = $event->image;
        $image = fileUpload($request, 'image', 'event');
        $old_banner_image = $event->banner_image;
        $banner_image = fileUpload($request, 'banner_image', 'banner_event');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        if ($banner_image) {
            removeFile($old_banner_image);
            $input['banner_image'] = $banner_image;
        } else {
            unset($input['banner_image']);
        }

        $input['slug'] = Str::slug($request->name);
        $event->update($input);
        return redirect()->route('event.index')->with('message', 'Update Successfully');
    }


    public function destroy(Event $event)
    {
        removeFile($event->image);
        removeFile($event->banner_image);
        $event->delete();
        return redirect()->route('event.index')->with('message', 'Delete Successfully');
    }
}
