@extends('admin.master')
@section('title', __('keywords.show_testimonial'))

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
                                <label for="name">{{ __('keywords.name') }}</label>
                                <p class="form-control">
                                    {{ $testimonial->name }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="position">{{ __('keywords.position') }}</label>
                                <p class="form-control">
                                    {{ $testimonial->position }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <p name="description" id="description" class="form-control">
                                    {{ $testimonial->description }}
                                </p>

                            </div>
                            <div class="form-group">
                                <label for="image">{{ __('keywords.image') }}</label>
                                <img src="{{ asset('storage/testimonials/' . $testimonial->image) }}" alt="image"
                                    width="50px" height="50px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
