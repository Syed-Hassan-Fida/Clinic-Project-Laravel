<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp7-2\htdocs\projects\wetransfer_truefamilycareclinic-com-zip_2024-03-04_1909\truefamilycareclinic.com\truefamilycareclinic.com\@core\resources\views/backend/partials/message.blade.php ENDPATH**/ ?>