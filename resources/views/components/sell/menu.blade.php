<li class="nav-item mt-2">
    <a class="nav-link text-active-primary ms-0 me-10 py-5
    {{ ($active)?'active':'' }}"
       data-bs-toggle="tab" href="#{!! $link !!}" aria-selected="{{ ($active)?'true':'false' }}" role="tab"
    >{!! $text !!}</a>
</li>
