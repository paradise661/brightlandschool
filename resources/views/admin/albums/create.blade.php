@extends('layouts.admin.master')
@section('title', 'Create New Albums')
@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Albums</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('album.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('album.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4 mb-3">
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input class="form-control br-8 @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name') }}" placeholder="Enter Name">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control ckeditor1 br-8 @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="10" placeholder="Enter description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-body card shadow br-8">

                            <div class="form-group mb-3">
                                <label for="seo_title">SEO Title</label>
                                <input class="form-control br-8 @error('seo_title') is-invalid @enderror" type="text"
                                    name="seo_title" value="{{ old('seo_title') }}" placeholder="Enter seo title">
                                @error('seo_title')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="seo_keywords">SEO Keywords</label>
                                <input class="form-control br-8 @error('seo_keywords') is-invalid @enderror" type="text"
                                    name="seo_keywords" value="{{ old('seo_keywords') }}" placeholder="Enter seo keywords">
                                @error('seo_keywords')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="seo_description">SEO Description</label>
                                <textarea class="form-control br-8 @error('seo_description') is-invalid @enderror" id="seo_description"
                                    name="seo_description" rows="3" placeholder="Enter seo description">{{ old('seo_description') }}</textarea>
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
                                {{ old('seo_schema') }}
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
                            <div class="form-group mb-3">
                                <label for="image">Featured Image</label>
                                <div class="custom-file">
                                    <input class="dropify @error('image') is-invalid @enderror" id="image"
                                        data-show-remove="false"
                                        data-default-file="{{ isset($album) ? asset('storage/' . $album->image) : '' }}"
                                        type="file" name="image">
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="shadow-sm">

                            <div class="card-footers">
                                <button class="btn btn-lg btn-primary" type="submit"><i class="fa-solid fa-plus"></i>
                                    Publish</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
