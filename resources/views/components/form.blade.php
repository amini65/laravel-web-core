    <form  class="form"  method="post" action="{!! $url !!}" enctype="multipart/form-data">
        @if(in_array($method, ['post']))
            @csrf
        @elseif(in_array($method, ['edit','update']))
            {!! csrf_field() !!}
            {{ method_field('PATCH') }}
        @endif

        <div class="card-body border-top p-9">
            {!! $slot !!}

        </div>
        <div class="card-footer d-flex justify-content-end py-4 px-6">
{{--            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
            <button type="submit" class="btn btn-primary" >{{__('submit')}}</button>
        </div>
    </form>

