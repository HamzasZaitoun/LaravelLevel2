@extends('admin.master')
@section('title', __('keywords.edit_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title ">{{ __('keywords.edit_feature') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.features.update', ['feature' => $feature]) }}"
                            method="POST"enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <input type="text" name="title" id="title"
                                    placeholder="{{ __('keywords.title') }} " value="{{ $feature->title }}"
                                    class="form-control" required>
                                <x-validation-error field="title"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <input type="text" name="icon" id="icon"
                                    placeholder="{{ __('keywords.icon') }}"value="{{ $feature->icon }}" class="form-control"
                                    required>
                                <x-validation-error field="icon"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <textarea name="description" id="description" class="form-control" placeholder="">
                                    {{ $feature->description }}
                                </textarea>
                                <x-validation-error field="description"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <x-submit-button></x-submit-button>
                                <x-cancel-button resource="features"></x-cancel-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
