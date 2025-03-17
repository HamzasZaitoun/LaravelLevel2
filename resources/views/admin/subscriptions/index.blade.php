@extends('admin.master')
@section('title', __('keywords.subscriptions'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title ">{{ __('keywords.subscriptions') }}</h2>

                  
                </div>


                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('keywords.email') }}</th>
                             
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscriptions) > 0)
                                    @foreach ($subscriptions as $key => $subescriber)
                                        <tr>
                                            <td>{{ $subscriptions->firstItem() + $loop->index }}</td>
                                            <td>{{ $subescriber->email }}</td>
                                       
                                            <td>

                                               
                                                <x-delete-button
                                                    href="{{ route('admin.subscriptions.destroy', ['subscription' => $subescriber]) }}"></x-delete-button>
                                            </td>


                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif


                            </tbody>
                        </table>
                        {{ $subscriptions->render('pagination::bootstrap-4') }}
                    </div>
                </div>


            </div> <!-- .col-12 -->
        </div> <!-- .container-fluid -->

    @endsection
