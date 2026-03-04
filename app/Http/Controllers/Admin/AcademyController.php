<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAcademyRequest;
use App\Http\Requests\UpdateAcademyRequest;
use App\Models\Academy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AcademyController extends Controller
{
    public function index()
    {
        $academy = Academy::where('status', 1)
            ->orderBy('order', 'asc')
            ->paginate(10);


        return view('admin.academy.index', compact('academy'));
    }


    public function create()
    {

        return view('admin.academy.create');
    }


    public function store(StoreAcademyRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'academy');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'banner_academy');
        $input['slug'] = Str::slug($request->name);
        Academy::create($input);
        return redirect()->route('academy.index')->with('message', 'Created Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit(Academy $academy)
    {

        return view('admin.academy.edit', compact('academy'));
    }


    public function update(UpdateAcademyRequest $request, Academy $academy)
    {
        $input = $request->all();
        $old_image = $academy->image;
        $image = fileUpload($request, 'image', 'academy');
        $old_banner_image = $academy->banner_image;
        $banner_image = fileUpload($request, 'banner_image', 'banner_academy');

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
        $academy->update($input);
        return redirect()->route('academy.index')->with('message', 'Update Successfully');
    }


    public function destroy(Academy $academy)
    {
        removeFile($academy->image);
        removeFile($academy->banner_image);
        $academy->delete();
        return redirect()->route('academy.index')->with('message', 'Delete Successfully');
    }
}
