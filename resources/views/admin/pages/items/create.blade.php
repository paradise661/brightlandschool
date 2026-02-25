@extends('layouts.admin.master')
@section('title', 'Create New Page')

@section('content')
    @include('admin.includes.message')
    <style>
        label {
            font-weight: 500 !important;
            text-transform: uppercase;
            margin-bottom: 5px;
            line-height: 200%;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-link.active:hover,
        .nav-tabs .nav-link.active:focus {
            background: #e7e7ff;
            background-color: #7174fe;
            color: white;
        }
    </style>
    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Page</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('pages.items.index', $page) }}"><i
                            class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('pages.items.store', $page) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4 mb-3">
                            <div class="row">
                                <div class="form-group mb-3 col-md-9">
                                    <label for="name">Name</label>
                                    <input class="form-control br-8 @error('name') is-invalid @enderror" type="text"
                                        name="name" value="{{ old('name') }}" placeholder="Enter Name">
                                    @error('name')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="icon">Icon</label>
                                    <input class="form-control br-8 @error('icon') is-invalid @enderror" type="text"
                                        name="icon" value="{{ old('icon') }}" placeholder="Enter Icon">
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
                                    name="description" rows="10" placeholder="Enter description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Bullet Points</label>

                                <div id="points-wrapper">
                                    <div class="flex items-center gap-2 mb-2">
                                        <input class="form-control br-8 flex-1" type="text" name="points[]"
                                            placeholder="Enter a point">

                                        <!-- Buttons side by side -->
                                        <div class="flex gap-2 mt-2">
                                            <button class="btn btn-danger remove-point" type="button">Remove</button>
                                            <button class="btn btn-success add-point" type="button">Add</button>
                                        </div>
                                    </div>
                                </div>

                                @error('points')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="card-body card shadow br-8">

                            <!-- Nav Tabs -->
                            <ul class="nav nav-tabs" id="customTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="message-tab" data-bs-toggle="tab"
                                        data-bs-target="#message" type="button" role="tab">
                                        Message
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo"
                                        type="button" role="tab">
                                        SEO
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other"
                                        type="button" role="tab">
                                        Other
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content p-4 border border-top-0" id="customTabContent">

                                <!-- Message Tab -->
                                <div class="tab-pane fade show active" id="message" role="tabpanel">
                                    <h4>Message Section</h4>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Name</label>
                                            <input class="form-control" name="message-name" type="text"
                                                placeholder="Enter message title">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Post</label>
                                            <input class="form-control" name="message_post" type="text"
                                                placeholder="Enter message title">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="description">Home Page Description</label>
                                        <textarea class="form-control ckeditor br-8 @error('short_description') is-invalid @enderror" id="short_description"
                                            name="short_description" rows="5" placeholder="Enter short_description">{{ old('short_description') }}</textarea>
                                        @error('short_description')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold mb-2">Bullet Points</label>

                                        <!-- Dynamic Fields Wrapper -->
                                        <div id="pointsWrapper">

                                            <!-- Initial Row -->
                                            <div class="row g-2 align-items-center mb-2 pointItem">
                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="message_points[]"
                                                        placeholder="Enter point">
                                                </div>

                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="message_icons[]"
                                                        placeholder="fa-solid fa-star">
                                                </div>

                                                <div class="col-md-2 d-flex gap-1">
                                                    <button class="btn btn-danger btn-sm w-50 remove-point"
                                                        type="button">Remove</button>
                                                    <button class="btn btn-success btn-sm w-50 add-point"
                                                        type="button">Add</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!-- SEO Tab -->
                                <div class="tab-pane fade" id="seo" role="tabpanel">
                                    <h4>SEO Settings</h4>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Keywords</label>
                                        <input class="form-control" type="text" placeholder="keyword1, keyword2">
                                    </div>
                                </div>

                                <!-- Other Tab -->
                                <div class="tab-pane fade" id="other" role="tabpanel">
                                    <h4>Other Settings</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" id="status" type="checkbox">
                                        <label class="form-check-label" for="status">
                                            Active Status
                                        </label>
                                    </div>
                                </div>

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
                            <!-- Hidden input for parent page -->
                            <input type="hidden" name="page_id" value="{{ $page->id }}">

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

                            <div class="card-footers">
                                <button class="btn btn-sm btn-primary" type="submit"><i class="fa-solid fa-plus"></i>
                                    Publish</button>
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

            // Add a new row
            wrapper.addEventListener('click', function(e) {
                if (e.target.classList.contains('add-point')) {
                    const div = document.createElement('div');
                    div.classList.add('flex', 'items-center', 'gap-2', 'mb-2');
                    div.innerHTML = `
                <input class="form-control br-8 flex-1" type="text" name="points[]" placeholder="Enter a point">
                <div class="flex gap-2 mt-2">
                    <button class="btn btn-danger remove-point" type="button">Remove</button>
                    <button class="btn btn-success add-point" type="button">Add</button>
                </div>
            `;
                    wrapper.appendChild(div);
                }

                // Remove a row
                if (e.target.classList.contains('remove-point')) {
                    e.target.closest('div.flex.items-center').remove();
                }
            });
        });

        //message bullet point
        function createPointRow() {
            return `
        <div class="row g-2 align-items-center mb-2 pointItem">
            <div class="col-md-5">
                <input class="form-control" type="text" name="message_points[]" placeholder="Enter point">
            </div>

            <div class="col-md-5">
                <input class="form-control" type="text" name="message_icons[]" placeholder="fa-solid fa-star">
            </div>

            <div class="col-md-2 d-flex gap-1">
                <button class="btn btn-danger btn-sm w-50 remove-point" type="button">Remove</button>
                <button class="btn btn-success btn-sm w-50 add-point" type="button">Add</button>
            </div>
        </div>
    `;
        }

        // Delegate click events
        document.addEventListener('click', function(e) {
            if (e.target.closest('.remove-point')) {
                e.target.closest('.pointItem').remove();
            }

            if (e.target.closest('.add-point')) {
                const wrapper = document.getElementById('pointsWrapper');
                wrapper.insertAdjacentHTML('beforeend', createPointRow());
            }
        });
    </script>

@endsection
