@extends('admin.master')
@section('title', __('keywords.add_new_testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title ">{{ __('keywords.add_new_testimonial') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.store') }}" method="POST"enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">

                                <x-form-label title="title" />

                                <input type="text" name="name" id="name" placeholder="{{ __('keywords.name') }}"
                                    class="form-control" required>
                                <x-validation-error field="name"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <x-form-label title="position" />
                                <input type="text" name="position" id="position"
                                    placeholder="{{ __('keywords.position') }}" class="form-control" required>
                                <x-validation-error field="position"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <x-form-label title="image" />
                                <input type="file" name="image" id="image" placeholder="{{ __('keywords.image') }}"
                                    class="form-control-file" required>
                                <x-validation-error field="image"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <x-form-label title="description" />
                                <textarea name="description" id="description" class="form-control" placeholder="description" required>

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
