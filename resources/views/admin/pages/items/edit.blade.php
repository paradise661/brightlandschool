@extends('layouts.admin.master')
@section('title', 'Edit ' . $item->name)

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
                                            <input class="form-control" type="text" name="message_name"
                                                value="{{ old('message_name', $item->message_name ?? '') }}"
                                                placeholder="Enter message title">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Post</label>
                                            <input class="form-control" type="text" name="message_post"
                                                value="{{ old('message_post', $item->message_post ?? '') }}"
                                                placeholder="Enter message post">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold mb-2">Bullet Points</label>

                                        <!-- Dynamic Fields Wrapper -->
                                        <div id="pointsWrapper">

                                            @if (old('message_points') || !empty($item->bullet_points))
                                                @php
                                                    $bulletPoints = old('message_points')
                                                        ? array_map(
                                                            function ($p, $i) {
                                                                return ['point' => $p, 'icon' => $i];
                                                            },
                                                            old('message_points'),
                                                            old('message_icons'),
                                                        )
                                                        : $item->bullet_points;
                                                @endphp

                                                @foreach ($bulletPoints as $bp)
                                                    <div class="row g-2 align-items-center mb-2 pointItem">
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text"
                                                                name="message_points[]" value="{{ $bp['point'] ?? '' }}"
                                                                placeholder="Enter point">
                                                        </div>

                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text"
                                                                name="message_icons[]" value="{{ $bp['icon'] ?? '' }}"
                                                                placeholder="fa-solid fa-star">
                                                        </div>

                                                        <div class="col-md-2 d-flex gap-1">
                                                            <button class="btn btn-danger btn-sm w-50 remove-point"
                                                                type="button">Remove</button>
                                                            <button class="btn btn-success btn-sm w-50 add-point"
                                                                type="button">Add</button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <!-- Initial empty row -->
                                                <div class="row g-2 align-items-center mb-2 pointItem">
                                                    <div class="col-md-5">
                                                        <input class="form-control" type="text"
                                                            name="message_points[]" placeholder="Enter point">
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
                                            @endif

                                        </div>
                                    </div>

                                </div>

                                <!-- SEO Tab -->
                                <div class="tab-pane fade" id="seo" role="tabpanel">
                                    <h4>SEO Settings</h4>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <input class="form-control" type="text" name="seo_title"
                                            value="{{ old('seo_title', $item->seo_title ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control" rows="3" name="seo_description">{{ old('seo_description', $item->seo_description ?? '') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Keywords</label>
                                        <input class="form-control" type="text" name="seo_keywords"
                                            value="{{ old('seo_keywords', $item->seo_keywords ?? '') }}"
                                            placeholder="keyword1, keyword2">
                                    </div>
                                </div>

                                <!-- Other Tab -->
                                <div class="tab-pane fade" id="other" role="tabpanel">
                                    <h4>Other Settings</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" id="status" type="checkbox" name="status"
                                            value="1" {{ old('status', $item->status ?? 0) ? 'checked' : '' }}>
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
                                        data-show-remove="false" data-default-file="{{ $item->image }}" type="file"
                                        name="image">

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
                                        data-show-remove="false" data-default-file="{{ $item->banner_image }}"
                                        type="file" name="banner_image">
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
