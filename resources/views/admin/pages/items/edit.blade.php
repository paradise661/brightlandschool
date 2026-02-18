@extends('layouts.admin.master')
@section('title', 'Edit ' . $event->name)

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Event - {{ $event->name }}</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('event.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('event.update', $event->id) }}"
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
                                        name="name" value="{{ old('name', $event->name) }}" placeholder="Enter Name">
                                    @error('name')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="icon">Icon</label>
                                    <input class="form-control br-8 @error('icon') is-invalid @enderror" type="text"
                                        name="icon" value="{{ old('icon', $event->icon) }}" placeholder="Enter Icon">
                                    @error('icon')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">

                                <!-- Location -->
                                <div class="form-group mb-3 col-md-3">
                                    <label for="location">Location</label>
                                    <input class="form-control br-8 @error('location') is-invalid @enderror" type="text"
                                        name="location" value="{{ old('location', $event->location) }}"
                                        placeholder="Enter location">
                                    @error('location')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Event Date -->
                                <div class="form-group mb-3 col-md-3">
                                    <label for="event_date">Event Date</label>
                                    <input class="form-control br-8 @error('event_date') is-invalid @enderror"
                                        type="date" name="event_date"
                                        value="{{ old('event_date', $event->event_date) }}">
                                    @error('event_date')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Start Time -->
                                <div class="form-group mb-3 col-md-3">
                                    <label for="start_time">Start Time</label>
                                    <input class="form-control br-8 @error('start_time') is-invalid @enderror"
                                        type="time" name="start_time"
                                        value="{{ old('start_time', $event->start_time) }}">
                                    @error('start_time')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- End Time -->
                                <div class="form-group mb-3 col-md-3">
                                    <label for="end_time">End Time</label>
                                    <input class="form-control br-8 @error('end_time') is-invalid @enderror" type="time"
                                        name="end_time" value="{{ old('end_time', $event->end_time) }}">
                                    @error('end_time')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control ckeditor1 br-8 @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="10" placeholder="Enter description">{{ old('description', $event->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
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
                                        value="{{ old('seo_title', $event->seo_title) }}" placeholder="Enter SEO Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_description">SEO Description</label>
                                    <textarea class="form-control br-8" name="seo_description" rows="4" placeholder="Enter SEO Description">{{ old('seo_description', $event->seo_description) }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_schema">SEO Schema</label>
                                    <textarea class="form-control br-8" name="seo_schema" rows="4" placeholder="Enter SEO Schema">{{ old('seo_schema', $event->seo_schema) }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_keywords">SEO Keywords</label>
                                    <textarea class="form-control br-8" name="seo_keywords" rows="4" placeholder="Enter SEO Keywords">{{ old('seo_keywords', $event->seo_keywords) }}</textarea>
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
                                    <option class="p-3" value="0"
                                        @if ($event->status == 0) selected @endif>
                                        Draft</option>
                                    <option class="p-3" value="1"
                                        @if ($event->status == 1) selected @endif>
                                        Publish</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label for="order">Order</label>
                                <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order', $event->order) }}" placeholder="Enter Order">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr class="shadow-sm">
                            <div class="form-group mb-3">
                                <label>Category</label>

                                <select class="form-select @error('event_categories_id') is-invalid @enderror"
                                    name="event_categories_id" required>
                                    <option value="">Select Category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('event_categories_id', $event->event_categories_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach

                                </select>

                                @error('event_categories_id')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <hr class="shadow-sm">
                            <!-- Image Upload -->
                            <div class="form-group mb-3 mt-2">
                                <label for="image">Featured Image</label>
                                <div class="custom-file">
                                    <input class="dropify @error('image') is-invalid @enderror" id="image"
                                        data-show-remove="false" data-default-file="{{ $event->image }}" type="file"
                                        name="image">
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
                                        data-show-remove="false" data-default-file="{{ $event->banner_image }}"
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
