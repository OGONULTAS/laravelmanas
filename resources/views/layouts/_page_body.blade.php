
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- header -->
    @include('layouts._header')

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- Left aSide -->
        @include('layouts._left_aside')
        <!-- content -->
        @include('layouts._content_body')
    </div>
    <!-- end:: Body -->

    <!-- footer -->
    @include('layouts._footer')
</div>
<!-- end:: Page -->

<!-- quick sidebar -->
@include('layouts._quick_sidebar')
<!-- end -->
@include('layouts._scroll_top')
<!-- end -->
