<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Appointment Area')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/nice-select.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.error-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Appointment Area Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.home12.appointment')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item">
                                        <a class="nav-link language_tab_btn <?php if(get_default_language() == $lang->slug): ?> active <?php endif; ?>" data-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" data-lang="<?php echo e($lang->slug); ?>" role="tab" aria-selected="true"><?php echo e($lang->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="tab-content margin-top-30" id="myTabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if(get_default_language() == $lang->slug): ?> show active <?php endif; ?>" id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" >
                                        <div class="form-group">
                                            <label for="home_page_12_<?php echo e($lang->slug); ?>_appointment_section_subtitle"><?php echo e(__('Subtitle')); ?></label>
                                            <input type="text" name="home_page_12_<?php echo e($lang->slug); ?>_appointment_section_subtitle" class="form-control" value="<?php echo e(get_static_option('home_page_12_'.$lang->slug.'_appointment_section_subtitle')); ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="home_page_12_<?php echo e($lang->slug); ?>_appointment_section_title"><?php echo e(__('Title')); ?></label>
                                            <input type="text" name="home_page_12_<?php echo e($lang->slug); ?>_appointment_section_title" class="form-control" value="<?php echo e(get_static_option('home_page_12_'.$lang->slug.'_appointment_section_title')); ?>" >
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label for="home_page_12_appointment_section_category"><?php echo e(__('Categories')); ?></label>
                                <?php
                                    $selected_donation = unserialize(get_static_option('home_page_12_appointment_section_category'),['class' => false]);
                                    $selected_cause = is_array($selected_donation) && count($selected_donation) > 0 ? $selected_donation : [];
                                ?>
                                <select  name="home_page_12_appointment_section_category[]" class="form-control nice-select wide" multiple>
                                    <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cat->id); ?>" <?php if(in_array($cat->id,$selected_cause)): ?> selected <?php endif; ?>><?php echo e(optional($cat->lang)->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="home_page_12_appointment_items"><?php echo e(__('Appointment Items')); ?></label>
                                <input type="text" name="home_page_12_appointment_items" class="form-control"  value="<?php echo e(get_static_option('home_page_12_appointment_items')); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/jquery.nice-select.min.js')); ?>"></script>
    <script>
        (function (){
            "use strict";


            if($('.nice-select').length > 0){
                $('.nice-select').niceSelect();
            }

            $(document).on('click','.language_tab_btn',function (){

                var lang = $(this).data('lang');
                var container = $('#nav-home-'+lang).find('.nice-select');
                if( container.has('option').length > 1 ) {
                    return;
                }
                //ajax call
                $.ajax({
                    type: 'POST',
                    url: "<?php echo e(route('admin.home12.appointment.category.by.slug')); ?>",
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>",
                        lang: lang
                    },
                    success: function (data){
                        var container = $('#nav-home-'+lang).find('.nice-select');
                        container.html('');
                        var output = '<option value="">'+"<?php echo e(__('Select category')); ?>"+'</option>';
                        $.each(data.categories,function (index,value){
                            var selected = data.selected_items.includes(value.id.toString()) ? 'selected' : '';
                            output += '<option value="'+value.id+'" '+selected+'>'+value.title+'</option>'
                        });
                        container.html(output);
                        $('.nice-select').niceSelect('update');
                    }
                });

            });

        })(jQuery)
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webagenc/public_html/tfcc.webagency.pk/@core/resources/views/backend/pages/home/medical/appointment-area.blade.php ENDPATH**/ ?>