@extends('layouts.admin.master')

@section('title', 'Create New slider')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4 p-6">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Create-Slider</h3>
                <small class="text-muted float-end">
                    <a href="{{ route('social.index') }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>

            <div class="card-body p-0">
                <form method="POST" class="row" action="{{ route('social.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- functions -->
                @php
                    $fields = [
                        'name' => 'Name',
                        'order' => 'Order',
                        'link' => 'link',
                        'icon' => 'Icons',

                    ];

                @endphp

                <div class="col-md-8">
                <div class="card-body card font-weight-bold br-8 mb-3">

                @foreach($fields as $name => $label)
                    <div class="form-group font-weight-bold mb-3">
                        <label for="{{ $name }}">{{ $label }}</label>
                        @if($name == 'description')
                            <textarea name="{{ $name }}" id="{{ $name }}" rows="10" class="form-control ckeditor br-8 @error($name) is-invalid @enderror" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                        @elseif($name == 'short_description')
                            <textarea name="{{ $name }}" id="{{ $name }}" rows="4" class="form-control br-8 @error($name) is-invalid @enderror" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                        @else
                            <input type="text" name="{{ $name }}" value="{{ old($name) }}" class="form-control br-8 @error($name) is-invalid @enderror" placeholder="Enter {{ strtolower($label) }}">
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
                    <label for="image">Icon Image</label>

                    <div class="custom-file">
                        <input type="file" name="image" data-show-remove="false" class="dropify @error('image') is-invalid @enderror" id="image">
                        @error('image')
                        <div class="invalid-feedback" style="display: block;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-footers d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-sm btn-primary w-full"><i class="fa-solid fa-plus"></i> Publish</button>
                    </div>
                </div>

                </form>
            </div>

        </div>
    </div>
@endsection


<!-- style -->

<style>
    label {
        font-weight: 500 !important;
        text-transform: uppercase;
        margin-bottom: 5px;
        line-height: 200%;


    }
</style>
