

<div class="modal fade" id="mod-{!! $id !!}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_target_form" class="form" action="{{ route('customers.continue') }}" method="post">
                    @csrf
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">{{ __('accept customer') }}</h1>
                        <div class="text-muted fw-semibold fs-5">{{ __('accept customer details') }}</div>
                    </div>
                    <div class="d-flex flex-stack mb-8">
                        <div class="me-5">
                            <label class="fs-6 fw-semibold">{{ __('Do you want this user to continue') }}</label>
                        </div>
                        <input type="hidden" name="costumer" value="{!! $id !!}">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" name="continue" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                    </div>
                    <div class="mb-15 fv-row hidden d-none">
                        <x-forms.select2 name="user" title="{{ __('user') }}" placeholder="{{ __('user') }}" >
                            @foreach(\Modules\User\Repositories\USRepo::getAgent() as $nation)
                                <option  value="{!! $nation->id !!}">{!! $nation->name !!}</option>
                            @endforeach
                        </x-forms.select2>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

