@extends('admin.master')
@section('title', __('keywords.show_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title ">{{ __('keywords.add_new_feature') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.features.store') }}" method="POST"enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <p class="form-control">
                                    {{ $feature->title }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <p class="form-control">
                                    <i class="{{ $feature->icon }} fa-2x"></i>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <p name="description" id="description" class="form-control">
                                    {{ $feature->description }}
                                </p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
