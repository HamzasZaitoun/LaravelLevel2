@extends('admin.master')
@section('title', __('keywords.add_new_service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title ">{{ __('keywords.add_new_service') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.store') }}" method="POST"enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">

                                <x-form-label title="title" />

                                <input type="text" name="title" id="title" placeholder="{{ __('keywords.title') }}"
                                    class="form-control" required>
                                <x-validation-error field="title"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <x-form-label title="icon" />
                                <input type="text" name="icon" id="icon" placeholder="{{ __('keywords.icon') }}"
                                    class="form-control" required>
                                <x-validation-error field="icon"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <x-form-label title="description" />
                                <textarea name="description" id="description" class="form-control" placeholder="">

                                </textarea>
                                <x-validation-error field="description"></x-validation-error>
                            </div>
                            <div class="form-group">
                                <x-submit-button></x-submit-button>
                                <x-cancel-button resource="services"></x-cancel-button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
