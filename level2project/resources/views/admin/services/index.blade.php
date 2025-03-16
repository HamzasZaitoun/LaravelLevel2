@extends('admin.master')
@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title ">{{ __('keywords.services') }}</h2>

                    <div class="page-title-right">
                        <a class="btn btn-sm btn-success btn-sm p-.5" href="{{ route('admin.services.create') }}">
                            {{ __('keywords.add_new') }}
                        </a>
                    </div>
                </div>


                <div class="card shadow">
                    <div class="card-body">

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
                                                <a class="btn btn-sm btn-success btn-sm p-.5"
                                                    href="{{ route('admin.services.edit', $service->id) }}">
                                                    <i class="fe fe-edit fa-2x"></i>
                                                </a>
                                                <a class="btn btn-sm btn-primary btn-sm p-.5"
                                                    href="{{ route('admin.services.show', $service->id) }}">
                                                    <i class="fe fe-eye fa-2x"></i>

                                                    <a class="btn btn-sm btn-danger btn-sm p-.5"
                                                        href="{{ route('admin.services.destroy', $service->id) }}">
                                                        <i class="fe fe-trash-2 fa-2x"></i>
                                                    </a>
                                                </a>
                                            </td>


                                        </tr>
                                    @endforeach
                                @else

                                    <x-empty-alert></x-empty-alert>
                                
                                @endif


                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-4') }}
                    </div>
                </div>


            </div> <!-- .col-12 -->
        </div> <!-- .container-fluid -->

    @endsection
