@extends('Dashboard::master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{{ __('edit') }} {!! $title !!}"/>
        </div>

        <div class="collapse show">
            <x-form method="edit" url="{{ route($route.'.update',[$model->id]) }}">
                <x-forms.input type="text" name="title" value="{!! $model->title !!}" title="{{ __('title') }}" placeholder="{{ __('title') }}"/>
                <x-forms.filemanager name="image" value="{!! $model->image !!}" placeholder="{{ __('image') }}"/>
                <x-forms.textarea type="text" value="{!! $model->description !!}" name="description" title="{{ __('description') }}"
                                  placeholder="{{ __('description') }}"/>
                <x-forms.select2 name="parent_id" title="{{ __('parent category') }}"
                                 placeholder="{{ __('parent category') }}">
                    <option value="0">{{ __('select') }}</option>
                @foreach(\Modules\Category\Entities\Repositories\CategoryRepo::byType(\Modules\Product\Models\Product::class) as $category)
                        <option value="{!! $category->id !!}" {{ ($category->id==$model->parent_id)?'selected':'' }}>{!! $category->title !!}</option>
                @endforeach
                </x-forms.select2>
            </x-form>
        </div>
    </div>

@endsection
