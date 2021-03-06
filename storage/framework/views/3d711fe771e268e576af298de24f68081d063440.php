<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            <?php echo $__env->yieldContent('title-page'); ?> - <?php echo $__env->yieldContent('title-base'); ?>
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->

        <!--end::Web font -->

        <!--begin::css -->
            <?php echo $__env->yieldContent('link-css'); ?>
        <link href=" https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700" rel="stylesheet" type="text/css" />
        <!--end::css -->




        <!-- metronic -->
        <link href="<?php echo e(URL::asset('assets/vendors/base/vendors.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- demo3 -->
        <link href="<?php echo e(URL::asset('assets/demo/default/base/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::asset('assets/demo/default/base/style.bundle2.css')); ?>" rel="stylesheet" type="text/css" />
        <!--end:: -->
        <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/demo/default/media/img/logo/favicon.ico')); ?>" />

    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <?php echo $__env->make('sweetalert::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layouts._page_body', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--begin:Scripts -->

        <script src="<?php echo e(URL::asset('assets/vendors/base/vendors.bundle.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/demo/default/base/scripts.bundle1.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/demo/default/base/scripts.bundle.js')); ?>" type="text/javascript"></script>

        <script>
            $(document).on('click', '#sidebar', function() {

            $.blockUI({
                message: 'Lütfen Bekleyiniz...',
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: '.5',
                    color: '#fff',
                    fontSize: '18px',
                    fontFamily: 'Verdana,Arial',
                    fontWeight: 200,
                } });});

        </script>
    <script>
        $(document).on('click', '#ui', function() {

            $.blockUI({
                message: 'Lütfen Bekleyiniz...',
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: '.5',
                    color: '#fff',
                    fontSize: '18px',
                    fontFamily: 'Verdana,Arial',
                    fontWeight: 200,
                } });});

    </script>


        <!--end::Scripts -->
        <!-- js -->




        <?php echo $__env->yieldContent('link-js'); ?>

    </body>
    <!-- end::Body -->
</html>