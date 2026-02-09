<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Slider;
use Illuminate\Support\Str;

class SliderController extends Controller
{

    public function index()
    {
        $slider = Slider::latest()->paginate(10);
        return view('admin.slider.index', compact('slider'));
    }


    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(StoreNewsRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'slider');
        $input['slug'] = Str::slug($request->name);
        $slider =  Slider::create($input);
        return redirect()->route('slider.index')->with('message', 'Created Successfully');
    }


    // public function show($id)
    // {
    //     //
    // }


    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }


    public function update(UpdateNewsRequest $request, Slider $slider)
    {
        $old_image = $slider->image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'slider');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $input['slug'] = Str::slug($request->name);
        $slider->update($input);
        return redirect()->route('slider.index')->with('message', 'Update Successfully');
    }


    public function destroy(Slider $slider)
    {
        removeFile($slider->image);
        $slider->delete();
        return redirect()->route('slider.index')->with('message', 'Delete Successfully');
    }
}
