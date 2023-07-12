<?php
$userRepo=new \Modules\User\Repositories\v2\UserRepo();
$users=$userRepo->agent()->office(\Illuminate\Support\Facades\Auth::user()->office->pluck('id'))->get();

?>

<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
    <input type="hidden" />
    <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y start-0">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
        </svg>
    </span>
    <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by user name" data-kt-search-element="input" />
    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
        <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
    </span>
    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
        <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
            </svg>
        </span>
    </span>
</form>

<x-form method="post" url="{{ route('customers.continue') }}" >
    <input type="hidden" name="costumer" value="{!! $customer !!}">
    <div class="mh-350px scroll-y me-n7 pe-7">
        @if($users)
            @foreach($users as $user)
                <label class="border border-hover-primary p-7 rounded mb-7 d-flex flex-stack mb-5 cursor-pointer">
                <span class="d-flex align-items-center me-2">
                    <div class="symbol symbol-35px symbol-circle me-5">
                        @if($user->image)
                            <img alt="Pic" src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}">
                        @else
                            <img alt="Pic" src="{{ asset('images/avatar.svg') }}" />
                        @endif
                    </div>
                    <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">{!! $user->name !!}</span>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <span class="badge badge-light">{{ $v }}</span>
                            @endforeach
                        @endif
                    </div>
                </span>
                    <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="user" value="{!! $user->id !!}" />
                </span>
                </label>
            @endforeach
        @endif
    </div>
</x-form>


