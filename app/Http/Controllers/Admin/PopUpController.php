<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePopupsRequest;
use App\Http\Requests\UpdatePopupsRequest;
use App\Models\PopUp;
use Illuminate\Http\Request;

class PopUpController extends Controller
{
    public function index()
    {
        $popups = PopUp::where('status', 1)->orderBy('order', 'asc')->paginate(10);

        return view('admin.popup.index', compact('popups'));
    }


    public function create()
    {
        return view('admin.popup.create');
    }


    public function store(StorePopupsRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'popup');
        PopUp::create($input);

        return redirect()->route('popup.index')->with('success', 'PopUp created successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(PopUp $popup)
    {
        return view('admin.popup.edit', compact('popup'));
    }



    public function update(UpdatePopupsRequest $request, PopUp $popup)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            removeFile($popup->image);
            $input['image'] = fileUpload($request, 'image', 'popup');
        }

        $popup->update($input);

        return redirect()->route('popup.index')->with('success', 'PopUp updated successfully');
    }


    public function destroy(PopUp $popup)
    {
        removeFile($popup->image);
        $popup->delete();

        return redirect()->route('popup.index')->with('success', 'PopUp deleted successfully');
    }
}
