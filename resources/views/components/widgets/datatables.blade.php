
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <x-icon-svg name="search" size="svg-icon svg-icon-1 position-absolute ms-4" />
                    <input type="text" data-{!! $id !!}-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
                </div>
                <div id="{!! $id !!}_views_export" class="d-none"></div>
            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
                            <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
                            <path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Export Report</button>
                <!--begin::Menu-->
                <div id="{!! $id !!}_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-{!! $id !!}-export="copy">Copy to clipboard</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-{!! $id !!}-export="excel">Export as Excel</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-{!! $id !!}-export="csv">Export as CSV</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-{!! $id !!}-export="pdf">Export as PDF</a>
                    </div>
                    <!--end::Menu item-->
                </div>

            </div>
        </div>
        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="{!! $id !!}_views_table">

                @isset($thead)
                    <thead>
                    <tr class="border-0 fw-bold text-muted bg-light">
                        {!! $thead !!}
                    </tr>
                    </thead>
                @endisset
                    @isset($tbody)
                        <tbody>
                        {!! $tbody !!}

                        </tbody>
                    @endisset
            </table>
        </div>

    <script>
        "use strict";
        var {!! $id !!}ReportViews = function () {
            var t, e;
            return {
                init: function () {
                    (t = document.querySelector("#{!! $id !!}_views_table")) && (e = $(t).DataTable({
                        info: !1,
                        order: [],
                        pageLength: 10
                    }), (() => {
                        const e = "Product Views Report";
                        new $.fn.dataTable.Buttons(t, {
                            buttons: [{extend: "copyHtml5", title: e}, {
                                extend: "excelHtml5",
                                title: e
                            }, {extend: "csvHtml5", title: e}, {extend: "pdfHtml5", title: e}]
                        }).container().appendTo($("#{!! $id !!}_views_export")), document.querySelectorAll("#{!! $id !!}_export_menu [data-{!! $id !!}-export]").forEach((t => {
                            t.addEventListener("click", (t => {
                                t.preventDefault();
                                const e = t.target.getAttribute("data-{!! $id !!}-export");
                                document.querySelector(".dt-buttons .buttons-" + e).click()
                            }))
                        }))
                    })(), document.querySelector('[data-{!! $id !!}-filter="search"]').addEventListener("keyup", (function (t) {
                        e.search(t.target.value).draw()
                    })), (() => {
                        const t = document.querySelector('[data-{!! $id !!}-filter="rating"]');
                        $(t).on("change", (t => {
                            let r = t.target.value;
                            "all" === r && (r = ""), e.column(2).search(r).draw()
                        }))
                    })())
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function () {
            {!! $id !!}ReportViews.init()
        }));

    </script>

