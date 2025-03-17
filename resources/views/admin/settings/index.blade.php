@extends('admin.master')
@section('title', __('keywords.edit_setting'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title ">{{ __('keywords.edit_setting') }}</h2>



                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}"
                            method="POST"enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="phone">{{ __('keywords.phone') }}</label>
                                <input type="text" name="phone" id="phone"
                                    placeholder="{{ __('keywords.phone') }} " value="{{ $setting->phone }}"
                                    class="form-control" required>
                                <x-validation-error field="phone"></x-validation-error>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">{{ __('keywords.address') }}</label>
                                <input type="text" name="address" id="address"
                                    placeholder="{{ __('keywords.address') }} " value="{{ $setting->address }}"
                                    class="form-control" required>
                                <x-validation-error field="address"></x-validation-error>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="twitter">{{ __('keywords.twitter') }}</label>
                                <input type="text" name="twitter" id="twitter"
                                    placeholder="{{ __('keywords.twitter') }} " value="{{ $setting->twitter }}"
                                    class="form-control" required>
                                <x-validation-error field="twitter"></x-validation-error>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">{{ __('keywords.email') }}</label>
                                <input type="text" name="email" id="email"
                                    placeholder="{{ __('keywords.email') }} " value="{{ $setting->email }}"
                                    class="form-control" required>
                                <x-validation-error field="email"></x-validation-error>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="facebook">{{ __('keywords.facebook') }}</label>
                                <input type="text" name="facebook" id="facebook"
                                    placeholder="{{ __('keywords.facebook') }} " value="{{ $setting->facebook }}"
                                    class="form-control" required>
                                <x-validation-error field="facebook"></x-validation-error>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                <input type="text" name="linkedin" id="linkedin"
                                    placeholder="{{ __('keywords.linkedin') }} " value="{{ $setting->linkedin }}"
                                    class="form-control" required>
                                <x-validation-error field="linkedin"></x-validation-error>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="instagram">{{ __('keywords.instagram') }}</label>
                                <input type="text" name="instagram" id="instagram"
                                    placeholder="{{ __('keywords.instagram') }} " value="{{ $setting->instagram }}"
                                    class="form-control" required>
                                <x-validation-error field="instagram"></x-validation-error>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="youtube">{{ __('keywords.youtube') }}</label>
                                <input type="text" name="youtube" id="youtube"
                                    placeholder="{{ __('keywords.youtube') }} " value="{{ $setting->youtube }}"
                                    class="form-control" required>
                                <x-validation-error field="youtube"></x-validation-error>
                            </div>

                            <div class="form-group col-md-6">
                                <x-submit-button></x-submit-button>
                                <x-cancel-button resource="settings"></x-cancel-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
