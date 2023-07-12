<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label fw-semibold fs-6">
        <span class="required">{!! $title !!}</span>
        @if($tooltip)
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{!! $tooltip !!}"></i>
        @endif
    </label>
    <!--end::Label-->
    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <select name="{!! $name !!}" aria-label="{!! $placeholder !!}" data-control="select2" data-placeholder="{!! $placeholder !!}" class="form-select form-select-solid form-select-lg fw-semibold">
            {{ $slot }}

        </select>
        @error($name)
        <div class="fv-plugins-message-container invalid-feedback">
            <div data-field="{!! $name !!}" data-validator="notEmpty">{{ $message }}</div>
        </div>
        @enderror
    </div>

    <!--end::Col-->
</div>
