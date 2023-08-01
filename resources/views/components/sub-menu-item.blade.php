<div class="menu-item">
    <a {{ $attributes->merge(['class' => 'menu-link']) }} {{ ($active)?'active':'' }}" href="{!! $link !!}">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">{!! $text !!}</span>
    </a>
</div>
