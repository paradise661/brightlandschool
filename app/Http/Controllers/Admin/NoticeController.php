<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;
use App\Models\Notice;
use App\Models\NoticeCategory;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::where('status', 1)->orderBy('order', 'asc')->paginate(10);
        return view('admin.notices.index', compact('notices'));
    }

    public function create()
    {
        $categories = NoticeCategory::orderBy('name')->get();
        return view('admin.notices.create', compact('categories'));
    }
    public function store(StoreNoticeRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        Notice::create($input);
        return redirect()->route('notices.index')->with('message', 'Created Successfully');
    }
    public function edit(Notice $notice)
    {
        $categories = NoticeCategory::orderBy('name')->get();
        return view('admin.notices.edit', compact('notice', 'categories'));
    }
    public function update(UpdateNoticeRequest $request, Notice $notice)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $notice->update($input);
        return redirect()->route('notices.index')->with('message', 'Updated Successfully');
    }

    public function destroy(Notice $notice)
    {
        $notice->delete();
        return redirect()->route('notices.index')->with('message', 'Deleted Successfully');
    }
}
