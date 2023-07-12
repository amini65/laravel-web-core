<a title="{!! $title !!}" href="{!! $route !!}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
   data-method="delete" data-token="{{csrf_token()}}"  data-confirm="{{ __('data confirm') }}"
>
    <x-icon-svg name="{!! $icon !!}"/>
</a>
