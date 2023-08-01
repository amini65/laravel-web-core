@extends('Dashboard::master')
@section('css')

    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('content')
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{!! $title !!}"/>
        </div>

        <div class="collapse show">
            <x-form method="post" url="{{ route($route.'.store') }}">
                <x-forms.select2 name="category_id" title="{{ __('parent category') }}" placeholder="{{ __('parent category') }}">
                    @foreach(\Modules\Category\Entities\Repositories\CategoryRepo::byType(\Modules\Product\Models\Product::class) as $category)
                        <option value="{!! $category->id !!}">{!! $category->title !!}</option>
                    @endforeach
                </x-forms.select2>
                <x-forms.input type="text" name="title" title="{{ __('title') }}" placeholder="{{ __('title') }}"/>
                <x-forms.input type="number" name="price" title="{{ __('price') }}" placeholder="{{ __('title') }}"/>
                <x-forms.filemanager name="image" placeholder="{{ __('image') }}"/>
                <x-forms.filemanager name="video" placeholder="{{ __('video') }}"/>
                <x-forms.textarea type="text" name="description" title="{{ __('description') }}" placeholder="{{ __('description') }}"/>

            </x-form>
        </div>
    </div>

@endsection
@section('js')

    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
