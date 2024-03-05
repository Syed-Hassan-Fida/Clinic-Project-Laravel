<?php 
if(empty(get_static_option('home_page_page_builder_status')) && in_array($home_page_variant,['07','09','19']) || Route::currentRouteName() == 'frontend.course.lesson'){ return;} 
?>
<?php if(!empty(get_static_option('home_page_support_bar_section_status'))): ?>
    <div class="top-bar-area header-variant-<?php echo e(get_static_option('home_page_variant')); ?>">
        <div class="container <?php if($home_page_variant == '20'): ?> container-two" <?php endif; ?>>
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-bar-inner">
                        <div class="left-content">
                            <ul class="social-icons">
                            </ul>
                        </div>
                        <div class="right-content">
                            <ul>
                                <ul>
                                    <li><a href="#">|Now Offering Telehealth! Call us today to schedule an appointment|</a></li>
                                    <li><a href="#">|Call Pearland:281-809-3664|</a></li>
                                    <li><a href="#">|Call Houston: 832-645-0004|</a></li>
                               </ul>
                                
                                <?php if(!empty(get_static_option('language_select_option'))): ?>
                                    <li>
                                        <select id="langchange">
                                            <?php $__currentLoopData = $all_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($user_select_lang_slug == $lang->slug): ?> selected <?php endif; ?> value="<?php echo e($lang->slug); ?>" class="lang-option"><?php echo e(explode('(',$lang->name)[0] ?? $lang->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </li>
                                <?php endif; ?>
                                <?php if(!empty(get_static_option('navbar_button'))): ?>
                                    <li>
                                        <?php
                                            $custom_url = !empty(get_static_option('navbar_button_custom_url_status')) ? get_static_option('navbar_button_custom_url') : route('frontend.request.quote');
                                        ?>
                                        <div class="btn-wrapper">
                                            <a href="<?php echo e($custom_url); ?>" rel="canonical"
                                               <?php if(!empty(get_static_option('navbar_button_custom_url_status'))): ?> target="_blank"
                                               <?php endif; ?> class="boxed-btn reverse-color"><?php echo e(get_static_option('navbar_'.$user_select_lang_slug.'_button_text')); ?></a>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH /home/webagenc/public_html/tfcc.webagency.pk/@core/resources/views/frontend/partials/supportbar.blade.php ENDPATH**/ ?>