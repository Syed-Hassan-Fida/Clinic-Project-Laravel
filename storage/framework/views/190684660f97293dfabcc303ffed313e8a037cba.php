<form action="<?php echo e($url); ?>" method="post" class="d-inline-block">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($id); ?>">
    <button type="submit" title="clone this to new draft"
            class="btn btn-xs btn-secondary btn-sm mb-3 mr-1"><i
                class="far fa-copy"></i></button>
</form><?php /**PATH C:\xampp7-2\htdocs\projects\wetransfer_truefamilycareclinic-com-zip_2024-03-04_1909\truefamilycareclinic.com\truefamilycareclinic.com\@core\resources\views/components/backend/clone-icon.blade.php ENDPATH**/ ?>