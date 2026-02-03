<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDownloadRequest;
use App\Http\Requests\UpdateDownloadRequest;
use Illuminate\Http\Request;
use App\Models\DownloadCategory;
use Illuminate\Support\Str;

class DownloadCategoryController extends Controller
{
    public function index()
    {
        $category = DownloadCategory::where('status', 1)->orderBy('order', 'asc')->paginate(10);
        return view('admin.downloads.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.downloads.category.create');
    }
    public function store(StoreDownloadRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        DownloadCategory::create($input);
        return redirect()->route('downloads-category.index')->with('message', 'Created Successfully');
    }
    public function edit(DownloadCategory $download_category)
    {
        return view('admin.downloads.category.edit', compact('download_category'));
    }
    public function update(UpdateDownloadRequest $request, DownloadCategory $download_category)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $download_category->update($input);
        return redirect()->route('downloads-category.index')->with('message', 'Updated Successfully');
    }
    public function destroy(DownloadCategory $download_category)
    {
        $download_category->delete();
        return redirect()->route('downloads-category.index')->with('message', 'Deleted Successfully');
    }
}
