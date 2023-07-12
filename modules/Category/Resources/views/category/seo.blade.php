@extends('panel.layouts.master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{{ __('edit') }} {!! $title !!}" />
        </div>
        <div class="card-body py-3">
        <div  class="collapse show">
            <x-form method="edit" url="{{ route($route.'.seoStore',[$model->id]) }}" >

                <x-seo seo="{!! $model->seo !!}"/>
            </x-form>
        </div>
    </div>
    </div>

@endsection
