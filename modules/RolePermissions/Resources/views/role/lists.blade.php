@extends('Panel::master')


@section('content')

<div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __($title) }} {{ __('table') }}</h5>
            </div>
        </div>


    </div>
</div>

<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon">
				<x-svg-image name="details" />
            </div>
            <div class="alert-text">
                <p></p>
            </div>
        </div>
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-label">{{ __($title) }} {{ __('table') }} </h3>
                @can('permission-role-create')
                <div class="card-toolbar">
                    <x-add-record route="{{ route($route.'.create') }}" name="{{ __('add') }} {{ __($title) }}"/>
                </div>
                @endcan
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0 pb-3">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                        <thead>
                        <tr class="text-uppercase">
                            <th title="Field #1">#</th>
                            <th title="Field #2">{{ __('name') }}</th>
                            <th title="Field #3"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($lists)
                            @foreach($lists as $key=>$list)
                                <tr>
                                    <td>{!! $key+1 !!}</td>
                                    <td class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{!! $list->name !!}</td>

                                    <td class="pr-0 text-right">
                                        @can('permission-role-create')
                                            <a href="{{ route($route.'.edit',[$list->id]) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                <x-svg-image name="edit"/>
                                            </a>
                                            <a href="{{ route($route.'.destroy',[$list->id]) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                               data-method="delete" data-token="{{csrf_token()}}"  data-confirm="{{ __('data confirm') }}">
                                                <x-svg-image name="delete" />
                                            </a>
                                        @endcan

                                    </td>
                                </tr>
                            @endforeach
                        @endif


                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Body-->
        </div>

    </div>
</div>

@endsection


@section('js')
    <script src="{{ asset('assets/js/html-table.js') }}"></script>
@endsection
