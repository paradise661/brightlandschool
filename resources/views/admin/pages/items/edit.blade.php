@extends('layouts.admin.master')
@section('title', 'Edit ' . $item->name)

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Event - {{ $item->name }}</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('pages.items.index', $page) }}">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </a>

                </small>
            </div>
            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('pages.items.update', [$page, $item->id]) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4 mb-3">
                            <div class="row">
                                <div class="form-group mb-3 col-md-9">
                                    <label for="name">Name</label>
                                    <input class="form-control br-8 @error('name') is-invalid @enderror" type="text"
                                        name="name" value="{{ old('name', $item->name) }}" placeholder="Enter Name">
                                    @error('name')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="icon">Icon</label>
                                    <input class="form-control br-8 @error('icon') is-invalid @enderror" type="text"
                                        name="icon" value="{{ old('icon', $item->icon) }}" placeholder="Enter Icon">
                                    @error('icon')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control ckeditor1 br-8 @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="10" placeholder="Enter description">{{ old('description', $item->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Bullet Points</label>

                                <div id="points-wrapper">

                                    @php
                                        $points = old('points', $item->points ?? ['']);
                                    @endphp

                                    @foreach ($points as $point)
                                        <div class="flex items-center gap-2 mb-2">
                                            <input class="form-control br-8 flex-1" type="text" name="points[]"
                                                value="{{ $point }}" placeholder="Enter a point">

                                            <div class="flex gap-2 mt-2">
                                                <button class="btn btn-danger remove-point" type="button">Remove</button>
                                                <button class="btn btn-success add-point" type="button">Add</button>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                                @error('points')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="card-body card shadow br-8">

                            <div class="form-group mb-3">
                                <label for="seo_title">SEO Title</label>
                                <input class="form-control br-8 @error('seo_title') is-invalid @enderror" type="text"
                                    name="seo_title" value="{{ old('seo_title', $item->seo_title) }}"
                                    placeholder="Enter seo title">
                                @error('seo_title')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="seo_keywords">SEO Keywords</label>
                                <input class="form-control br-8 @error('seo_keywords') is-invalid @enderror" type="text"
                                    name="seo_keywords" value="{{ old('seo_keywords', $item->seo_keywords) }}"
                                    placeholder="Enter seo keywords">
                                @error('seo_keywords')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="seo_description">SEO Description</label>
                                <textarea class="form-control br-8 @error('seo_description') is-invalid @enderror" id="seo_description"
                                    name="seo_description" rows="3" placeholder="Enter seo description">{{ old('seo_description', $item->seo_description) }}</textarea>
                                @error('seo_description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- SEO Schema -->
                            <div class="form-group mb-3">
                                <label for="seo_schema">SEO Schema </label>
                                <textarea class="form-control br-8 @error('seo_schema') is-invalid @enderror" name="seo_schema" rows="5"
                                    placeholder="Enter schema in JSON format">
                                {{ old('seo_schema', $item->seo_schema) }}
                                </textarea>

                                @error('seo_schema')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select class="form-select ms-5" id="status" name="status">
                                    <option class="p-3" value="1"
                                        {{ old('status', $item->status) == 1 ? 'selected' : '' }}>Publish</option>
                                    <option class="p-3" value="0"
                                        {{ old('status', $item->status) == 0 ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">

                            <div class="form-group mb-3 d-flex align-items-center">
                                <label for="order">Order</label>
                                <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order', $item->order) }}" placeholder="Enter Order">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr class="shadow-sm">
                            <!-- Hidden input for parent page -->
                            <input type="hidden" name="page_id" value="{{ $page->id }}">

                            <div class="form-group mb-3 mt-2">
                                <label for="image">Featured Image</label>
                                <div class="custom-file">
                                    <input class="dropify @error('image') is-invalid @enderror" id="image"
                                        data-show-remove="false" type="file" name="image"
                                        value="{{ old('image', $item->image) }}">
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
                                        data-show-remove="false" type="file" name="banner_image"
                                        value="{{ old('banner_image', $item->banner_image) }}">
                                    @error('banner_image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="shadow-sm">

                            <div class="card-footers text-center">
                                <button class="btn btn-sm btn-primary" type="submit"><i class="fa-solid fa-rotate"></i>
                                    Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.getElementById('points-wrapper');

            wrapper.addEventListener('click', function(e) {

                // ADD
                if (e.target.classList.contains('add-point')) {
                    const div = document.createElement('div');
                    div.className = 'flex items-center gap-2 mb-2';
                    div.innerHTML = `
                <input class="form-control br-8 flex-1" type="text" name="points[]" placeholder="Enter a point">
                <div class="flex gap-2 mt-2">
                    <button class="btn btn-danger remove-point" type="button">Remove</button>
                    <button class="btn btn-success add-point" type="button">Add</button>
                </div>
            `;
                    wrapper.appendChild(div);
                }

                // REMOVE
                if (e.target.classList.contains('remove-point')) {
                    const rows = wrapper.querySelectorAll('.flex.items-center');
                    if (rows.length > 1) {
                        e.target.closest('.flex.items-center').remove();
                    }
                }
            });
        });
    </script>
@endsection
