<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageItemRequest;
use App\Http\Requests\UpdatePageItemRequest;
use App\Models\Page;
use App\Models\PageItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageItemController extends Controller
{
    public function index(Page $page)
    {
        $pagesItem = $page->items()
            ->where('status', 1)
            ->orderBy('order', 'asc')
            ->paginate(10);

        return view('admin.pages.items.index', compact('page', 'pagesItem'));
    }



    public function create(Page $page)
    {
        return view('admin.pages.items.create', compact('page'));
    }



    public function store(StorePageItemRequest $request, Page $page)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'page_item');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'page_item');
        $input['slug'] = Str::slug($request->name);
        $input['page_id'] = $page->id;
        $input['points'] = $request->points ?? [];

        PageItem::create($input);

        return redirect()->route('pages.items.index', $page)
            ->with('success', 'Page Item created successfully');
    }



    public function show(string $id)
    {
        //
    }


    public function edit(PageItem $pageItem)
    {
        return view('admin.pages.items.edit', compact('pageItem'));
    }


    public function update(UpdatePageItemRequest $request, PageItem $pageItem)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            removeFile($pageItem->image);
            $input['image'] = fileUpload($request, 'image', 'page_item');
        }
        if ($request->hasFile('banner_image')) {
            removeFile($pageItem->banner_image);
            $input['banner_image'] = fileUpload($request, 'banner_image', 'page_item');
        }
        $input['slug'] = Str::slug($request->name);
        $pageItem->update($input);

        return redirect()->route('pages.items.index')->with('success', 'Page Item updated successfully');
    }


    public function destroy(PageItem $pageItem)
    {
        removeFile($pageItem->image);
        removeFile($pageItem->banner_image);
        $pageItem->delete();
        return redirect()->route('pages.items.index')->with('success', 'Page Item deleted successfully');
    }
}
