@extends('panel.layouts.master')
@section('css')

    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('content')
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{!! $title !!}" />
        </div>

        <div  class="collapse show">
            <x-form method="post" url="{{ route($route.'.store') }}" >
                <x-forms.select2 name="type" title="{{ __('type') }}" placeholder="{{ __('type') }}" >
                    <option  value="{{ \App\Models\Blog::class }}">blog</option>
                    <option  value="{{ \App\Models\Product::class }}">product</option>

                </x-forms.select2>
                <x-forms.input type="text" name="title" title="{{ __('title') }}" placeholder="{{ __('title') }}" />
                <x-forms.filemanager  name="image" placeholder="{{ __('image') }}"   />
             </x-form>
        </div>
    </div>


@endsection
@section('js')

    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
