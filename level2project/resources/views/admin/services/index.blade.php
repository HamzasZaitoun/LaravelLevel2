@extends('admin.master')
@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title ">{{ __('keywords.services') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.services.create') }}" type="create"></x-action-button>
                    </div>
                </div>


                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th>{{ __('keywords.icon') }}</th>
                                    <th>{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($services) > 0)
                                    @foreach ($services as $key => $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>
                                                <i class="{{ $service->icon }} fa-2x"></i>
                                            </td>
                                            <td>

                                                <x-action-button
                                                    href="{{ route('admin.services.edit', ['service' => $service]) }}"
                                                    type="edit"></x-action-button>


                                                <x-action-button
                                                    href="{{ route('admin.services.show', ['service' => $service]) }}"
                                                    type="show"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.services.destroy', ['service' => $service]) }}"></x-delete-button>
                                            </td>


                                        </tr>
                                    @endforeach
                                @else
<<<<<<< HEAD
                                    <x-empty-alert></x-empty-alert>
=======

                                    <x-empty-alert></x-empty-alert>
                                
>>>>>>> cd9c8a3dced03aa691c5724cd6abd8ee0d596bfe
                                @endif


                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-4') }}
                    </div>
                </div>


            </div> <!-- .col-12 -->
        </div> <!-- .container-fluid -->

    @endsection
