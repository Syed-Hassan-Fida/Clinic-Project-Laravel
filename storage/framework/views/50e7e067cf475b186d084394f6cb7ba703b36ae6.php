<script>
    (function ($){
        "use strict";

        $('.icp-dd').iconpicker();
        $('body').on('iconpickerSelected','.icp-dd', function (e) {
            var selectedIcon = e.iconpickerValue;
            $(this).parent().parent().children('input').val(selectedIcon);
            $('body .dropdown-menu.iconpicker-container').removeClass('show');
        });

    })(jQuery);
</script><?php /**PATH /home/webagenc/public_html/truefamilycareclinic.com/@core/resources/views/backend/partials/icon-field/js.blade.php ENDPATH**/ ?>