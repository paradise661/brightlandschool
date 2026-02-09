<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Session;
use Illuminate\Http\Request;
use File;
use App\Models\Blogcategory;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        $blogs = Post::where('status', 1)
            ->orderBy('order', 'ASC')
            ->paginate(10);

        //
        return view('admin.news.index', compact('blogs'));
    }


    public function create()
    {
        $categories = Blogcategory::orderBy('name')->get();
        return view('admin.news.create', compact('categories'));
    }


    public function store(StoreNewsRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'blog');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'banner_blog');
        $input['slug'] = Str::slug($request->name);
        Post::create($input);
        return redirect()->route('blog.index')->with('message', 'Created Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit(Post $blog)
    {
        $categories = Blogcategory::orderBy('name')->get();
        return view('admin.news.edit', compact('blog', 'categories'));
    }


    public function update(UpdateNewsRequest $request, Post $blog)
    {
        $input = $request->all();
        $old_image = $blog->image;
        $image = fileUpload($request, 'image', 'blog');
        $old_banner_image = $blog->banner_image;
        $banner_image = fileUpload($request, 'banner_image', 'banner_blog');

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
        $blog->update($input);
        return redirect()->route('blog.index')->with('message', 'Update Successfully');
    }


    public function destroy(Post $blog)
    {
        removeFile($blog->image);
        removeFile($blog->banner_image);
        $blog->delete();
        return redirect()->route('blog.index')->with('message', 'Delete Successfully');
    }
}
