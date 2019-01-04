
<!-- BEGIN: Header -->
<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- header的logo部分 -->
            <?php echo $__env->make('layouts._header_brand', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                <!-- header的水平菜单 -->
                <?php echo $__env->make('layouts._header_horizontal_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <!-- header的顶部栏 -->
                <?php echo $__env->make('layouts._header_topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>
    </div>
</header>
<!-- END: Header -->