

{{--<div class="col-xl-8">--}}
<div class="col-{!! $col !!} ">
<div class="card card-flush h-md-100">
    <!--begin::Header-->
    <div class="card-header  pt-7">
        <x-page.title text="{!! $text !!}" description="{!! $description !!}"/>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-6">
        {{ $slot }}
    </div>
    <!--begin::Body-->
</div>
</div>


