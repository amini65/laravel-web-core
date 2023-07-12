<div class="row mb-6">
    <label class="col-lg-4 col-form-label fw-semibold fs-6">
        <span class="required">{!! $title !!}</span>
        @if($tooltip)
        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{!! $tooltip !!}"></i>
        @endif
    </label>
    <div class="col-lg-8 fv-row">
        <input type="{!! $type !!}" name="{!! $name !!}" class="form-control form-control-lg form-control-solid"
               placeholder="{!! $placeholder !!}" value="{!! isset($value) ? $value : old($name) !!}" />

        @error($name)
        <div class="fv-plugins-message-container invalid-feedback">
            <div data-field="{!! $name !!}" data-validator="notEmpty">{{ $message }}</div>
        </div>
        @enderror
    </div>
</div>
