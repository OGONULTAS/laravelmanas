
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- 引入头部header -->
    <?php echo $__env->make('layouts._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- 引入左侧边栏 -->
        <?php echo $__env->make('layouts._left_aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- 引入主体content -->
        <?php echo $__env->make('layouts._content_body', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!-- end:: Body -->

    <!-- 引入底部footer -->
    <?php echo $__env->make('layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<!-- end:: Page -->

<!-- 引入快捷侧边栏-右 -->
<?php echo $__env->make('layouts._quick_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- 右下方快捷回到顶部 -->
<?php echo $__env->make('layouts._scroll_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- 右边固定的快捷导航 -->
<?php echo $__env->make('layouts._quick_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>