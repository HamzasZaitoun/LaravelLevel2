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
                                <label for="title">{{ __('keywords.title') }}</label>
                                <input type="text" name="title" id="title" placeholder="{{ __('keywords.title') }}"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <input type="text" name="icon" id="icon" placeholder="{{ __('keywords.icon') }}"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <textarea name="description" id="description" class="form-control" placeholder="">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">{{ __('keywords.save') }}</button>
                                <a href="{{ route('admin.services.index') }}"
                                    class="btn btn-primary">{{ __('keywords.cancel') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
