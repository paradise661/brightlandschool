<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventCategoryController extends Controller
{
    public function index()
    {
        $category = EventCategory::where('status', 1)->orderBy('order', 'asc')->paginate(10);
        return view('admin.events.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.events.category.create');
    }
    public function store(StoreEventRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        EventCategory::create($input);

        return redirect()->route('event-category.index')->with('message', 'Created Successfully');
    }
    public function edit(EventCategory $event_category)
    {
        return view('admin.events.category.edit', compact('event_category'));
    }
    public function update(UpdateEventRequest $request, EventCategory $event_category)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $event_category->update($input);

        return redirect()->route('event-category.index')->with('message', 'Updated Successfully');
    }
    public function destroy(EventCategory $event_category)
    {
        $event_category->delete();
        return redirect()->route('event-category.index')->with('message', 'Deleted Successfully');
    }
}
