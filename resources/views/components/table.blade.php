<div class="table-responsive" >
    <table class="table table-row-dashed table-row-gray-400  align-middle gs-0 gy-4">
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
