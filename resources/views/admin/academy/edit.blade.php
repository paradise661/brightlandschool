@extends('layouts.admin.master')
@section('title', 'Edit ' . $academy->name)

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Academy - {{ $academy->name }}</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('academy.index') }}"><i
                            class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('academy.update', $academy->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4">
                            <!-- Name Field -->
                            <div class="row">
                                <div class="form-group mb-3 col-md-9">
                                    <label for="name">Name</label>
                                    <input class="form-control br-8 @error('name') is-invalid @enderror" type="text"
                                        name="name" value="{{ old('name', $academy->name) }}" placeholder="Enter Name">
                                    @error('name')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="icon">Icon</label>
                                    <input class="form-control br-8 @error('icon') is-invalid @enderror" type="text"
                                        name="icon" value="{{ old('icon', $academy->icon) }}" placeholder="Enter Icon">
                                    @error('icon')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Description Field -->
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control ckeditor br-8 @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="10" placeholder="Enter Description">{{ old('description', $academy->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" role="alert" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Bullet Points</label>

                                <div id="points-wrapper">

                                    @php
                                        $points = old('points', $academy->points ?? ['']);
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

                        <!-- SEO Section -->
                        <div class="card card-body seo my-5 shadow br-8 p-4">
                            <fieldset class="border p-3">
                                <legend class="float-none w-auto legend-title">SEO</legend>
                                <div class="form-group mb-3">
                                    <label for="seo_title">SEO Title</label>
                                    <input class="form-control br-8" type="text" name="seo_title"
                                        value="{{ old('seo_title', $academy->seo_title) }}" placeholder="Enter SEO Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_description">SEO Description</label>
                                    <textarea class="form-control br-8" name="seo_description" rows="4" placeholder="Enter SEO Description">{{ old('seo_description', $academy->seo_description) }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_schema">SEO Schema</label>
                                    <textarea class="form-control br-8" name="seo_schema" rows="4" placeholder="Enter SEO Schema">{{ old('seo_schema', $academy->seo_schema) }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_keywords">SEO Keywords</label>
                                    <textarea class="form-control br-8" name="seo_keywords" rows="4" placeholder="Enter SEO Keywords">{{ old('seo_keywords', $academy->seo_keywords) }}</textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="col-md-3">
                        <div class="card-body card shadow br-8">
                            <!-- Status Field -->
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select class="form-select ms-5" id="status" name="status">
                                    <option class="p-3" value="0" @if ($academy->status == 0) selected @endif>
                                        Draft</option>
                                    <option class="p-3" value="1" @if ($academy->status == 1) selected @endif>
                                        Publish</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label for="order">Order</label>
                                <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order', $academy->order) }}"
                                    placeholder="Enter Order">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr class="shadow-sm">

                            <!-- Image Upload -->
                            <div class="form-group mb-3 mt-2">
                                <label for="image">Featured Image</label>
                                <div class="custom-file">
                                    <input class="dropify @error('image') is-invalid @enderror" id="image"
                                        data-show-remove="false" data-default-file="{{ $academy->image }}"
                                        type="file" name="image">
                                    @error('image')
                                        <div class="invalid-feedback" role="alert" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Banner Image Upload -->
                            <div class="form-group mb-3 mt-2">
                                <label for="banner_image">Banner Image</label>
                                <div class="custom-file">
                                    <input class="dropify @error('banner_image') is-invalid @enderror" id="banner_image"
                                        data-show-remove="false" data-default-file="{{ $academy->banner_image }}"
                                        type="file" name="banner_image">
                                    @error('banner_image')
                                        <div class="invalid-feedback" role="alert" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="shadow-sm">

                            <!-- Submit Button -->
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
