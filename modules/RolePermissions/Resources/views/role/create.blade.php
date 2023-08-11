@extends('Panel::master')


@section('content')
    <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
        <div class="col-xl-12 col-xxl-7">
            <!--begin::Form Wizard-->
            <form action="{{ route($route.'.store') }}" method="post" class="form" id="kt_projects_add_form">
                @csrf
                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                    <h3 class="mb-10 font-weight-bold text-dark">{{ __('create') }} {{ $title }}:</h3>
                    <div class="row">
                        <div class="col-xl-12">
                            <x-input type="text" name="name" placeholder="{{ __('name') }}" />
                            <x-check-box placeholder="{{ __('permission') }}">
                                @foreach($permissions as $permission)
                                    <label class="checkbox col-4">
                                        <input type="checkbox" value="{!! $permission->id !!}" name="permission[]" />
                                        <span></span> {{ __($permission->name) }}</label>
                                @endforeach
                            </x-check-box>


                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-between border-top mt-5 pt-10">

                    <div>
{{--                        <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>--}}
                        <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">
                            {{ __('submit') }}
                        </button>
                    </div>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form Wizard-->
        </div>
    </div>

@endsection
