
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- header -->
    <?php echo $__env->make('layouts._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- Left aSide -->
        <?php echo $__env->make('layouts._left_aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- content -->
        <?php echo $__env->make('layouts._content_body', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!-- end:: Body -->

    <!-- footer -->
    <?php echo $__env->make('layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<!-- end:: Page -->

<!-- quick sidebar -->
<?php echo $__env->make('layouts._quick_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- end -->
<?php echo $__env->make('layouts._scroll_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- end -->
