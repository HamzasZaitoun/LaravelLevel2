@extends('admin.master')
@section('title', __('keywords.edit_testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title ">{{ __('keywords.edit_testimonial') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.update', ['testimonial' => $testimonial]) }}"
                            method="POST"enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="title">{{ __('keywords.name') }}</label>
                                <input type="text" name="name" id="name" placeholder="{{ __('keywords.name') }} "
                                    value="{{ $testimonial->name }}" class="form-control" required>
                                <x-validation-error field="name"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <label for="position">{{ __('keywords.position') }}</label>
                                <input type="text" name="position" id="position"
                                    placeholder="{{ __('keywords.position') }}"value="{{ $testimonial->position }}"
                                    class="form-control" required>

                                <x-validation-error field="position"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <label for="image">{{ __('keywords.image') }}</label>
                                <input type="file" name="image" id="image" class="form-control">

                                <x-validation-error field="image"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <textarea name="description" id="description" class="form-control" placeholder="">
                                    {{ $testimonial->description }}
                                </textarea>
                                <x-validation-error field="description"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <x-submit-button></x-submit-button>
                                <x-cancel-button resource="testimonials"></x-cancel-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
