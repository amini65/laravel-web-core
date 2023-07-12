<div class="mx-2">
    <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary"
       data-kt-menu-trigger="click"
       data-kt-menu-placement="bottom-end"
       data-bs-toggle="tooltip"
       data-bs-placement="top"
       aria-label="Settings"
       data-bs-original-title="Settings"
       data-kt-initialized="1">
        <x-icon-svg name="trigger" />

    </a>
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-250px py-4"
         data-kt-menu="true" style="">
        {{ $slot }}
    </div>

</div>
