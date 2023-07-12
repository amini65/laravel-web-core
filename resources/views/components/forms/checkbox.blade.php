<div class="row mb-6">
    <!--begin::Label-->
    <x-forms.label text="{!! $text !!}" />
    <!--end::Label-->
    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <!--begin::Options-->
{{--        <div class="d-flex align-items-center mt-3">--}}
        <div class="row">
            {{ $slot }}
        </div>
        <!--end::Options-->

{{--        <div class="fv-plugins-message-container invalid-feedback">--}}
{{--            <div data-field="communication[]" data-validator="notEmpty">Please select at least one communication method</div>--}}
{{--        </div>--}}
    </div>
    <!--end::Col-->
</div>
