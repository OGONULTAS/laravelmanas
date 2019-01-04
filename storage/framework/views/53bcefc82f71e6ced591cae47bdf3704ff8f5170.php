<!DOCTYPE html>
<html lang="zh-CN" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            <?php echo $__env->yieldContent('title-page', 'demo'); ?> - <?php echo $__env->yieldContent('title-base', 'demo'); ?>
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->

        <!--end::Web font -->
        <!--begin::基础样式 -->
        <!--begin::页面级和用户级css -->
            <?php echo $__env->yieldContent('link-css'); ?>
        <!--end::页面级和用户级css -->
        <!-- 全局样式，所有metronic使用 -->
        <link href="<?php echo e(URL::asset('assets/vendors/base/vendors.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- demo3的专用养海参 -->
        <link href="<?php echo e(URL::asset('assets/demo/default/base/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <!--end::基础样式 -->
        <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/demo/default/media/img/logo/favicon.ico')); ?>" />

    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <?php echo $__env->make('layouts._page_body', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--begin::基础Scripts -->
        <script src="<?php echo e(URL::asset('assets/vendors/base/vendors.bundle.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/demo/default/base/scripts.bundle.js')); ?>" type="text/javascript"></script>
        <!--end::基础Scripts -->
        <!-- 导入页面级js和用户级js -->
        <?php echo $__env->yieldContent('link-js'); ?>

    </body>
    <!-- end::Body -->
</html>