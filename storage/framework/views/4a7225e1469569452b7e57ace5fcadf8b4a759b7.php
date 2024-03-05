<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp7-2\htdocs\projects\truefamilycareclinic-com\site\core\@core\resources\views/components/flash-msg.blade.php ENDPATH**/ ?>