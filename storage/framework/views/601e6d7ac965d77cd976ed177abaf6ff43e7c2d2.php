
<?php $__env->startSection('page-title'); ?>
    <?php echo e(get_static_option('contact_page_'.$user_select_lang_slug.'_name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-meta-data'); ?>
    <meta name="description" content="<?php echo e(get_static_option('contact_page_'.$user_select_lang_slug.'_meta_description')); ?>">
    <meta name="tags" content="<?php echo e(get_static_option('contact_page_'.$user_select_lang_slug.'_meta_tags')); ?>">
    <?php echo render_og_meta_image_by_attachment_id(get_static_option('contact_page_'.$user_select_lang_slug.'_meta_image')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <h6>Pearland Clinic</h6>
    </body>
    <?php if(!empty(get_static_option('contact_page_page_builder_status'))): ?>
        <?php echo \App\PageBuilder\PageBuilderSetup::render_frontend_pagebuilder_content_by_location('contactpage'); ?>

    <?php else: ?>
        <?php echo $__env->make('frontend.partials.contact-page-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Duplicate the content here -->
        <body>
    <h6>Houston Clinic</h6>
    </body>
        <?php if(!empty(get_static_option('contact_page_contact_info_section_status'))): ?>
        <div class="inner-contact-section padding-top-120 padding-bottom-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="single-contact-item">
                            <div class="icon style-01">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Email Adress</h5>
                                <p class="details">clinic@truefamilycareclinic.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-contact-item">
                            <div class="icon style-02">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Phone</h5>
                                <p class="details">P:832-645-0004 <br>F:832-645-0005</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-contact-item">
                            <div class="icon style-03">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Open Hours</h5>
                                <p class="details">Mon-Fri<br> 8am-5pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-contact-item">
                            <div class="icon style-04">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Location</h5>
                                <p class="details">7404 Airline Dr. Suite G. Houston, TX 77076</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- End of duplicated content -->
        
        <!-- Hardcoded Google Map -->
        <div class="contact-section padding-bottom-120">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h4 class="title"><?php echo e(get_static_option('contact_page_'.$user_select_lang_slug.'_form_section_title')); ?></h4>
                                    </div>
                                    <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php if($errors->any()): ?>
                                        <ul class="alert alert-danger">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <form action="<?php echo e(route('frontend.contact.message')); ?>" method="post" class="contact-page-form" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="captcha_token" id="gcaptcha_token">
                                <?php echo render_form_field_for_frontend(get_static_option('contact_page_contact_form_fields')); ?>

            
                                <div class="btn-wrapper">
                                    <button type="submit" class="boxed-btn reverse-color"><?php echo e(get_static_option('contact_page_'.$user_select_lang_slug.'_form_submit_btn_text')); ?></button>
                                </div>
            
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.843058524792!2d-95.38597852349358!3d29.8687996268695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640b7afc08d2b5b%3A0xdedffcf00e352597!2sTrue%20Family%20Clinic%202%20-%20Airline%20Drive!5e0!3m2!1sen!2sus!4v1684862586945!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Google Map -->
        
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('frontend.partials.google-captcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7-2\htdocs\projects\truefamilycareclinic-com\site\core\@core\resources\views/frontend/pages/contact-page.blade.php ENDPATH**/ ?>