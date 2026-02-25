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

        // Combine message_points[] and message_icons[] into bullet_points JSON
        $messagePoints = $request->input('message_points', []);
        $messageIcons  = $request->input('message_icons', []);

        $bulletPoints = [];
        foreach ($messagePoints as $index => $point) {
            if (!empty($point)) {
                $bulletPoints[] = [
                    'point' => $point,
                    'icon'  => $messageIcons[$index] ?? null
                ];
            }
        }
        $input['bullet_points'] = $bulletPoints;

        PageItem::create($input);

        return redirect()->route('pages.items.index', $page)
            ->with('success', 'Page Item created successfully');
    }



    public function show(string $id)
    {
        //
    }


    public function edit(Page $page, PageItem $item)
    {
        return view('admin.pages.items.edit', compact('page', 'item'));
    }



    public function update(UpdatePageItemRequest $request, Page $page, PageItem $item)
    {
        $data = $request->all();

        $data['points'] = array_values(array_filter($request->points ?? []));

        if ($request->hasFile('image')) {
            removeFile($item->image);
            $data['image'] = fileUpload($request, 'image', 'page_item');
        }
        if ($request->hasFile('banner_image')) {
            removeFile($item->banner_image);
            $data['banner_image'] = fileUpload($request, 'banner_image', 'page_item');
        }

        // $data['slug'] = Str::slug($request->name);


        // Combine message_points[] and message_icons[] into bullet_points JSON
        $messagePoints = $request->input('message_points', []);
        $messageIcons  = $request->input('message_icons', []);

        $bulletPoints = [];
        foreach ($messagePoints as $index => $point) {
            $icon = $messageIcons[$index] ?? null;
            if (!empty($point) || !empty($icon)) {
                $bulletPoints[] = [
                    'point' => $point,
                    'icon'  => $icon
                ];
            }
        }
        $data['bullet_points'] = $bulletPoints;

        $item->update($data);

        return redirect()
            ->route('pages.items.index', $page)
            ->with('success', 'Page Item updated successfully');
    }


    public function destroy(Page $page, PageItem $item)
    {
        removeFile($item->image);
        removeFile($item->banner_image);
        $item->delete();

        return redirect()
            ->route('pages.items.index', $page)
            ->with('success', 'Page Item deleted successfully');
    }
}
