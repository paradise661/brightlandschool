<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;
use App\Models\Blogcategory;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $category = Blogcategory::where('status', 1)->orderBy('order', 'asc')->paginate(10);
        return view('admin.news.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.news.category.create');
    }
    public function store(StoreNewsRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        Blogcategory::create($input);

        return redirect()->route('blog-category.index')->with('message', 'Created Successfully');
    }
    public function edit(Blogcategory $blog_category)
    {
        return view('admin.news.category.edit', compact('blog_category'));
    }
    public function update(UpdateNewsRequest $request, Blogcategory $blog_category)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $blog_category->update($input);

        return redirect()->route('blog-category.index')->with('message', 'Updated Successfully');
    }
    public function destroy(Blogcategory $blog_category)
    {
        $blog_category->delete();
        return redirect()->route('blog-category.index')->with('message', 'Deleted Successfully');
    }
}
