<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDownloadRequest;
use App\Http\Requests\UpdateDownloadRequest;
use Illuminate\Http\Request;
use App\Models\DownloadCategory;
use Illuminate\Support\Str;
use App\Models\Download;


class DownloadsController extends Controller
{
    public function index()
    {
        $downloads = Download::where('status', 1)
            ->orderBy('order', 'ASC')
            ->paginate(10);


        return view('admin.downloads.index', compact('downloads'));
    }


    public function create()
    {
        $categories = DownloadCategory::orderBy('name')->get();
        return view('admin.downloads.create', compact('categories'));
    }


    public function store(StoreDownloadRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'downloads');
        if ($request->hasFile('file')) {
            $input['file'] = fileUpload($request, 'file', 'downloads/files');
            $input['file_size'] = $request->file('file')->getSize();
        }
        $input['slug'] = Str::slug($request->name);
        Download::create($input);
        return redirect()->route('downloads.index')->with('message', 'Created Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit(Download $download)
    {
        $categories = DownloadCategory::orderBy('name')->get();
        return view('admin.downloads.edit', compact('download', 'categories'));
    }


    public function update(UpdateDownloadRequest $request, Download $download)
    {
        $input = $request->all();
        $old_image = $download->image;
        $image = fileUpload($request, 'image', 'downloads');
        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        if ($request->hasFile('file')) {
            $old_file = $download->file;
            $file = fileUpload($request, 'file', 'downloads/files');
            if ($file) {
                removeFile($old_file);
                $input['file'] = $file;
                $input['file_size'] = $request->file('file')->getSize();
            }
        }

        $input['slug'] = Str::slug($request->name);
        $download->update($input);
        return redirect()->route('downloads.index')->with('message', 'Update Successfully');
    }


    public function destroy(Download $download)
    {
        removeFile($download->image);
        removeFile($download->file);
        $download->delete();
        return redirect()->route('downloads.index')->with('message', 'Delete Successfully');
    }
}
