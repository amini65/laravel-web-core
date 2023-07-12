<div {!! $attributes !!} >
{{--<div {{ $attributes->merge(['class' => 'accordionItem closeIt']) }}>--}}
    <a href="#" class="card {!! $bg !!} hoverable card-xl-stretch mb-xl-8">
        <div class="card-body">
            <x-icon-svg name="{!! $icon !!}" size="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1"/>

            <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">{!! $text !!}</div>
            <div class="fw-semibold text-gray-100">{!! $details !!}</div>
        </div>
    </a>
</div>
