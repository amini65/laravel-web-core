@if($icon)
<a href="#" data-bs-toggle="modal" data-bs-target="#mod-{!! $id !!}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
    <x-icon-svg name="{!! $icon !!}"/>
    {!! $title !!}
</a>
@else

    <a href="#" data-bs-toggle="modal" data-bs-target="#mod-{!! $id !!}" class="btn btn-sm btn-primary align-self-center">
        {!! $title !!}
    </a>
@endif
