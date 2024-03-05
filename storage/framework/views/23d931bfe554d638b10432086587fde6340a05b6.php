<?php $__env->startSection('content'); ?>
    <?php
    $page_partial = 'home-'.get_static_option('home_page_variant');
    if (!empty(get_static_option('home_page_page_builder_status'))){
        $page_partial = 'page-builder';
    }
    ?>
<?php echo $__env->make('frontend.home-pages.'.$page_partial, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7-2\htdocs\projects\wetransfer_truefamilycareclinic-com-zip_2024-03-04_1909\truefamilycareclinic.com\truefamilycareclinic.com\@core\resources\views/frontend/frontend-home.blade.php ENDPATH**/ ?>