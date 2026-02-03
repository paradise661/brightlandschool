@extends('layouts.admin.master')

@section('title', 'Create New Blogs')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4 p-6">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Create Blogs</h3>
                <small class="text-muted float-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('blog.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>

            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                    @csrf

                    @php
                        $fields = [
                            'name' => 'Name',
                            'description' => 'Description',
                        ];

                        $seo = [
                            'seo_title' => 'SEO Title',
                            'seo_keywords' => 'SEO Keywords',
                            'seo_description' => 'SEO Description',
                            'seo_schema' => 'SEO Schema',
                        ];
                    @endphp

                    <!-- Blog Fields -->
                    <div class="col-md-8">
                        <div class="card-body card font-weight-bold br-8 mb-3">
                            @foreach ($fields as $name => $label)
                                <div class="form-group font-weight-bold mb-3">
                                    <label for="{{ $name }}">{{ $label }}</label>
                                    @if ($name == 'description')
                                        <textarea class="form-control ckeditor br-8 @error($name) is-invalid @enderror" id="{{ $name }}"
                                            name="{{ $name }}" rows="10" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                                    @else
                                        <input class="form-control br-8 @error($name) is-invalid @enderror" type="text"
                                            name="{{ $name }}" value="{{ old($name) }}"
                                            placeholder="Enter {{ strtolower($label) }}">
                                    @endif
                                    @error($name)
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        </div>

                        <!-- SEO Fields -->
                        <div class="card-body card shadow br-8">
                            @foreach ($seo as $name => $label)
                                <div class="form-group mb-3">
                                    <label for="{{ $name }}">{{ $label }}</label>
                                    @if ($name == 'seo_description' || $name == 'seo_schema')
                                        <textarea class="form-control br-8 @error($name) is-invalid @enderror" id="{{ $name }}"
                                            name="{{ $name }}" rows="{{ $name == 'seo_schema' ? 6 : 3 }}"
                                            placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                                    @else
                                        <input class="form-control br-8 @error($name) is-invalid @enderror" type="text"
                                            name="{{ $name }}" value="{{ old($name) }}"
                                            placeholder="Enter {{ strtolower($label) }}">
                                    @endif
                                    @error($name)
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select class="form-select ms-5" id="status" name="status">
                                    <option class="p-3" value="1">Publish</option>
                                    <option class="p-3" value="0">Draft</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">

                            <div class="form-group mb-3 d-flex align-items-center">
                                <label for="order">Order</label>
                                <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order') }}" placeholder="Enter Order">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr class="shadow-sm">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Category</label>

                                <select class="form-select ms-5" name="blogcategories_id" required>
                                    <option value="">Select Category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <hr class="shadow-sm">

                            <div class="form-group mb-3 mt-2">
                                <label for="image">Featured Image</label>
                                <div class="custom-file">
                                    <input class="dropify @error('image') is-invalid @enderror" id="image"
                                        data-show-remove="false" type="file" name="image">
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3 mt-2">
                                <label for="image">Banner Image</label>
                                <div class="custom-file">
                                    <input class="dropify @error('banner_image') is-invalid @enderror" id="banner_image"
                                        data-show-remove="false" type="file" name="banner_image">
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="shadow-sm">

                            <div class="card-footers d-flex justify-content-center">
                                <button class="btn btn-sm btn-primary w-full" type="submit"><i
                                        class="fa-solid fa-plus"></i>
                                    Publish</button>
                            </div>

                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection

<!-- Style -->
<style>
    label {
        font-weight: 500 !important;
        text-transform: uppercase;
        margin-bottom: 5px;
        line-height: 200%;
    }
</style>
