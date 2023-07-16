<div class="row mb-6">


    <label class="col-lg-4 col-form-label fw-semibold fs-6">
        {{ $placeholder }}
        @if(isset($attributes['required']))
            <span class="required">*</span>
        @endif
    </label>


    <div class="col-lg-8 fv-row">
        <div class="input-group input-group-sm">
            <input name="{{$name}}" id="input-{{ $name }}"  class="form-control form-control-lg form-control-solid" type="text"
                   {{ $attributes }}
                   value="{!! isset($value) ? $value : old($name) !!}"
            >
            <span class="input-group-btn">
                <button id="button-{{ $name }}" type="button" data-input="thumbnail" data-preview="holder" class="btn btn-info btn-flat">
                                {{ __('select') }}
            </button>
        </span>
        </div>


        @error($name)
        <div class="form-text text-danger">{{ $message }}</div>
        @enderror

    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-{{ $name }}').addEventListener('click', (event) => {
            event.preventDefault();
            inputId = 'input-{{ $name }}';
            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            document.getElementById(inputId).value = $url;
        });


    });
    function fmSetLink($url) {
        document.getElementById(inputId).value = $url;
    }
</script>

