
<!-- BEGIN: Header -->
<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- header的logo部分 -->
            @include('layouts._header_brand')

            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                <!-- header的水平菜单 -->
                @include('layouts._header_horizontal_menu')

                <!-- header的顶部栏 -->
                @include('layouts._header_topbar')

            </div>
        </div>
    </div>
</header>
<!-- END: Header -->