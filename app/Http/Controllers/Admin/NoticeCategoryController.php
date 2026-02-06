<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;
use App\Models\NoticeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticeCategoryController extends Controller
{
    public function index()
    {
        $category = NoticeCategory::where('status', 1)->orderBy('order', 'asc')->paginate(10);
        return view('admin.notices.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.notices.category.create');
    }
    public function store(StoreNoticeRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        NoticeCategory::create($input);
        return redirect()->route('notices-category.index')->with('message', 'Created Successfully');
    }
    public function edit(NoticeCategory $notice_category)
    {
        return view('admin.notices.category.edit', compact('notice_category'));
    }
    public function update(UpdateNoticeRequest $request, NoticeCategory $notice_category)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $notice_category->update($input);
        return redirect()->route('notices-category.index')->with('message', 'Updated Successfully');
    }

    public function destroy(NoticeCategory $notice_category)
    {
        $notice_category->delete();
        return redirect()->route('notices-category.index')->with('message', 'Deleted Successfully');
    }
}
