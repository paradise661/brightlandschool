<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::where('status', 1)->orderBy('order', 'asc')->paginate(10);

        return view('admin.pages.index', compact('pages'));
    }


    public function create()
    {
        return view('admin.pages.create');
    }


    public function store(StorePageRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        Page::create($input);
        return redirect()->route('pages.index')->with('success', 'Page created successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }


    public function update(UpdatePageRequest $request, Page $page)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $page->update($input);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }


    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully');
    }
}
