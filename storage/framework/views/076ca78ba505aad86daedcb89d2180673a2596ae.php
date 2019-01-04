
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- 子header -->
    <?php echo $__env->make('layouts._sub_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="m-content">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>