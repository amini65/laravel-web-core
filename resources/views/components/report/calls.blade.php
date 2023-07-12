<div class="col-xl-3">
    <!--begin::Card widget 3-->
    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end"
         style="background-color:  {{ ($icon=='in')?'#F1416C':'#7239EA' }};
         @if($bg=='red')
             background-image:url({{ asset('images/shapes/wave-bg-red.svg') }})
         @elseif($bg=='blue')
             background-image:url({{ asset('images/shapes/wave-bg-purple.svg') }})
         @endif
         ">
        <!--begin::Header-->
        <div class="card-header pt-5 mb-3">
            <!--begin::Icon-->
            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                 style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: {{ ($icon=='in')?'#F1416C':'#7239EA' }}">
                <i class="{{ ($icon=='in')?'fonticon-incoming-call':'fonticon-outgoing-call' }} text-white fs-2qx lh-0"></i>
            </div>
        </div>
        <div class="card-body d-flex align-items-end mb-3">
            <div class="d-flex align-items-center">
                <span class="fs-4hx text-white fw-bold me-6">{!! $count !!}</span>
                <div class="fw-bold fs-6 text-white">
                    @if($bg=='red')
                        <span class="d-block">{{ __('inbound') }}</span>
                        <span class="">{{ __('calls') }}</span>
                    @elseif($bg=='blue')
                        <span class="d-block">{{ __('outbound') }}</span>
                        <span class="">{{ __('calls') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
