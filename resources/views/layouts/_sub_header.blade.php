{{--,title,title-page,url,title1、title2...,url --}}
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">
                <a href="@yield('title_url')" class="m-nav__link m-nav__link--icon" style="text-decoration: none">
                    <span class="m-nav__link-text">
                        @yield('sub_header_title', $__env->yieldContent('title-page'))
                    </span>
                </a>
            </h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ url('/') }}" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                @if($__env->yieldContent('sub_header_title1') !== '')
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="@yield('title1_url', 'javascript:void(0)')" class="m-nav__link">
                            <span class="m-nav__link-text">
                                @yield('sub_header_title1')
                            </span>
                        </a>
                    </li>
                @endif
                @if($__env->yieldContent('sub_header_title2') !== '')
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="@yield('title2_url', 'javascript:void(0)')" class="m-nav__link">
                            <span class="m-nav__link-text">
                                @yield('sub_header_title2')
                            </span>
                        </a>
                    </li>
                @endif
                @if($__env->yieldContent('sub_header_title3') !== '')
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="@yield('title3_url', 'javascript:void(0)')" class="m-nav__link">
                            <span class="m-nav__link-text">
                                @yield('sub_header_title3')
                            </span>
                        </a>
                    </li>
                @endif
        </ul>
        </div>
        <div>
            <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                <span class="m-subheader__daterange-label">
                    <span class="m-subheader__daterange-title"></span>
                    <span class="m-subheader__daterange-date m--font-brand"></span>
                </span>
                <a href="javascript:void(0)" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                    <i class="la la-angle-down"></i>
                </a>
            </span>
        </div>
    </div>
</div>
<!-- END: Subheader -->