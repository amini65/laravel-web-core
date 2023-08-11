@extends('Panel::master')


@section('content')
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expوed="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('edit') }} {!! $title !!}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            <form  action="{{ route($route.'.update',[$role->id]) }}" method="post" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {{ method_field('PATCH') }}
                <div class="card-body border-top p-9">
                    <x-input type="text" name="name" value="{!! $role->name !!}" placeholder="{{ __('name') }}" />
                    <x-check-box placeholder="{{ __('permission') }}">
                        @foreach($permissions as $permission)
                            <label class="checkbox col-3">
                                <input type="checkbox" value="{!! $permission->id !!}" name="permission[]" {{ (in_array($permission->id,$rolePermissions))?'checked':'' }}>
                                <span></span>
                                {{ __($permission->name) }}
                            </label>
                        @endforeach
                    </x-check-box>
                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="{{ route($route.'.index') }}" type="reset" class="btn btn-warning   font-weight-bolder text-uppercase px-9 py-4">{{ __('cancel') }}</a>
                    <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">
                        {{ __('submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
