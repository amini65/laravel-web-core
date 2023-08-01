@extends('Dashboard::master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{{ __('edit') }} {!! $title !!}"/>
        </div>

        <div class="collapse show">
            <x-form method="edit" url="{{ route($route.'.update',[$model->id]) }}">
                <x-forms.select2 name="category_id" title="{{ __('parent category') }}" placeholder="{{ __('parent category') }}">
                    @foreach(\Modules\Category\Entities\Repositories\CategoryRepo::byType(\Modules\Product\Models\Product::class) as $category)
                        <option value="{!! $category->id !!}" {{ ($category->id==$model->category_id)?'selected':'' }}>{!! $category->title !!}</option>
                    @endforeach
                </x-forms.select2>
                <x-forms.input type="text" value="{!! $model->title !!}" name="title" title="{{ __('title') }}" placeholder="{{ __('title') }}"/>
                <x-forms.input type="number" value="{!! $model->price !!}" name="price" title="{{ __('price') }}" placeholder="{{ __('title') }}"/>
                <x-forms.filemanager value="{!! $model->image !!}" name="image" placeholder="{{ __('image') }}"/>
                <x-forms.filemanager value="{!! $model->video !!}" name="video" placeholder="{{ __('video') }}"/>
                <x-forms.textarea value="{!! $model->description !!}" type="text" name="description" title="{{ __('description') }}" placeholder="{{ __('description') }}"/>

            </x-form>
        </div>
    </div>

@endsection
