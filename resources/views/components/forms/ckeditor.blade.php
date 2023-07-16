<div class="row mb-6">
    <label class="col-lg-2 col-form-label fw-semibold fs-6">
        @if(isset($attributes['required']))
            <span class="required">*</span>
        @else
            <span >{!! $title !!}</span>
        @endif
        @if($tooltip)
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{!! $tooltip !!}"></i>
        @endif
    </label>
    <div class="col-lg-10 fv-row">
        <textarea id="{!! $name !!}" class="form-control form-control-solid" rows="3" name="{!! $name !!}"
                  placeholder="{!! $placeholder !!}">{!! isset($value) ? $value : old($name) !!}</textarea>

        @error($name)
        <div class="fv-plugins-message-container invalid-feedback">
            <div data-field="{!! $name !!}" data-validator="notEmpty">{{ $message }}</div>
        </div>
        @enderror
    </div>



</div>

<script>
    CKEDITOR.replace({!! $name !!} ,{
        filebrowserUploadUrl : '/admin/panel/upload-image',
        filebrowserImageUploadUrl :  '/admin/panel/upload-image'
    });
</script>
