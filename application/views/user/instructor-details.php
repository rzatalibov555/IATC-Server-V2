<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/other_navbar'); ?>

<main>

    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title"><?php echo $this->lang->line('teachers'); ?></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line('teachers'); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- instructor details area start -->
    <section class="teacher__area pt-100 pb-110">
        <div class="page__title-shape">
            <img class="page-title-shape-5 d-none d-sm-block" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-1.png" alt="">
            <img class="page-title-shape-6" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-6.png" alt="">
            <img class="page-title-shape-3" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-3.png" alt="">
            <img class="page-title-shape-7" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-4.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__details-thumb p-relative w-img pr-30">
                        <?php if ($single_teacher['t_img']) { ?>
                            <img src="<?php echo base_url('upload/teachers/' . $single_teacher['t_img']); ?>" alt="">
                        <?php } else { ?>
                            <!-- <img src="<?php echo base_url('assets/admin/assets/images/no-img.png'); ?>" alt=""> -->
                            <img src="<?php echo base_url('assets/user/assets/img/logo/IATC_DarkLogo.png'); ?>" alt="">
                        <?php } ?>
                        <div class="teacher__details-shape">
                            <img class="teacher-details-shape-1" src="<?php echo base_url('assets/user/'); ?>assets/img/teacher/details/shape/shape-1.png" alt="">


                            <?php if ($single_teacher['t_img']) { ?>
                                <img class="teacher-details-shape-2" src="<?php echo base_url('assets/user/'); ?>assets/img/teacher/details/shape/shape-2.png" alt="">
                            <?php } ?>


                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="teacher__wrapper">
                        <div class="teacher__top d-md-flex align-items-end justify-content-between">
                            <div class="teacher__info">
                                <h4><?php echo $single_teacher['t_title_' . $this->session->userdata('lang_code')]; ?></h4>
                                <?php if ($single_teacher['t_position_az']) { ?>
                                    <span><?php echo $single_teacher['t_position_az']; ?></span>
                                <?php } ?>

                            </div>
                            <!--                           <div class="teacher__rating">-->
                            <!--                              <h5>Review:</h5>-->
                            <!--                              <div class="teacher__rating-inner d-flex align-items-center">-->
                            <!--                                 <ul>-->
                            <!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                            <!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                            <!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                            <!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                            <!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                            <!--                                 </ul>-->
                            <!--                                 <p>4.5</p>-->
                            <!--                              </div>-->
                            <!--                           </div>-->
                            <div class="teacher__social-2">
                                <!--                              <h4>Follow Us:</h4>-->
                                <ul>
                                    <?php if ($single_teacher['t_fb']) { ?>
                                        <li>
                                            <a target="_blank" href="<?php echo $single_teacher['t_fb']; ?>">
                                                <i class="social_facebook"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if ($single_teacher['t_instagram']) { ?>
                                        <li>
                                            <a target="_blank" href="<?php echo $single_teacher['t_instagram']; ?>">
                                                <i class="social_instagram"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if ($single_teacher['t_twitter']) { ?>
                                        <li>
                                            <a target="_blank" href="<?php echo $single_teacher['t_twitter']; ?>">
                                                <i class="social_twitter"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if ($single_teacher['t_linkedin']) { ?>
                                        <li>
                                            <a target="_blank" href="<?php echo $single_teacher['t_linkedin']; ?>">
                                                <i class="social_linkedin"></i>
                                            </a>
                                        </li>
                                    <?php } ?>





                                </ul>
                            </div>
                            <!--                           <div class="teacher__follow mb-5">-->
                            <!--                              <a href="#" class="teacher__follow-btn">follow <i class="icon_plus"></i> </a>-->
                            <!--                           </div>-->
                        </div>
                        <div class="teacher__bio">
                            <h3><?php echo $this->lang->line('aboutt'); ?></h3>
                            <?php echo $single_teacher['t_description_' . $this->session->userdata('lang_code')]; ?>
                        </div>
                        <div class="teacher__courses pt-55">
                            <div class="section__title-wrapper mb-30">
                                <h2 class="section__title"><?php echo $this->lang->line('teachersss'); ?> <span class="yellow-bg yellow-bg-big"><?php echo $this->lang->line('coursesss'); ?><img src="<?php echo base_url('assets/user/'); ?>assets/img/shape/yellow-bg.png" alt=""></span></h2>
                            </div>
                            <div class="teacher__course-wrapper">
                                <div class="row">


                                    <?php foreach ($all_courses as $all_courses_key) { ?>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="course__item white-bg mb-30 fix">
                                                <div class="course__thumb w-img p-relative fix">
                                                    <a href="<?php echo base_url('course_single/' . $all_courses_key['c_id']); ?>">
                                                        <img height="250" style="object-fit: contain;" src="<?php echo base_url('upload/courses/' . $all_courses_key['img']); ?>" alt="">
                                                    </a>
                                                    <div class="course__tag">
                                                        <a href="<?php echo base_url('category/' . $all_courses_key['i_c_id']); ?>"><?php echo $all_courses_key['i_c_name']; ?></a>
                                                    </div>
                                                </div>
                                                <div class="course__content">
                                                    <div class="course__meta d-flex align-items-center justify-content-between">
                                                        <div class="course__lesson">
                                                            <span><i class="far fa-book-alt"></i><?php echo $all_courses_key['duration']; ?></span>
                                                        </div>
                                                        <div class="course__rating">
                                                            <span><i class="icon_star"></i></span>
                                                            <span><i class="icon_star"></i></span>
                                                            <span><i class="icon_star"></i></span>
                                                            <span><i class="icon_star"></i></span>
                                                            <span><i class="icon_star"></i></span>
                                                        </div>
                                                    </div>
                                                    <h3 class="course__title"><a href="<?php echo base_url('course_single/' . $all_courses_key['c_id']); ?>"><?php echo $all_courses_key['title_' . $this->session->userdata('lang_code')]; ?></a></h3>
                                                    <div class="course__teacher d-flex align-items-center">
                                                        <div class="course__teacher-thumb mr-15">
                                                            <img src="<?php echo base_url('upload/teachers/' . $all_courses_key['t_img']); ?>" alt="">
                                                        </div>
                                                        <h6><a href="<?php echo base_url('instructor_single/' . $all_courses_key['t_id']); ?>"><?php echo $all_courses_key['t_title_' . $this->session->userdata('lang_code')]; ?></a></h6>
                                                    </div>
                                                </div>

                                                <style>
                                                    .status_course {
                                                        display: inline-block;
                                                        height: 24px;
                                                        line-height: 24px;
                                                        font-size: 12px !important;
                                                        font-weight: 500;
                                                        color: #ffffff !important;
                                                        background: green;
                                                        padding: 0 10px;
                                                        -webkit-border-radius: 4px;
                                                        -moz-border-radius: 4px;
                                                        border-radius: 4px;
                                                    }

                                                    .status_course span {
                                                        font-size: 12px !important;
                                                        color: #ffffff !important;
                                                    }
                                                </style>

                                                <div class="course__more d-flex justify-content-between align-items-center">
                                                    <div class="course__status status_course">
                                                        <?php if ($all_courses_key['t_status'] == '1') { ?>
                                                            <span><?php echo $this->lang->line('active'); ?></span>
                                                        <?php } elseif ($all_courses_key['t_status'] == '2') { ?>
                                                            <span><?php echo $this->lang->line('deactive'); ?></span>
                                                        <?php } elseif ($all_courses_key['t_status'] == '3') { ?>
                                                            <span><?php echo $this->lang->line('pending'); ?></span>
                                                        <?php } else { ?>
                                                            <span>-</span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="course__btn">
                                                        <a href="<?php echo base_url('course_single/' . $all_courses_key['c_id']); ?>" class="link-btn">
                                                            <?php echo $this->lang->line('more'); ?>
                                                            <i class="far fa-arrow-right"></i>
                                                            <i class="far fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instructor details area end -->

    <!-- cta area start -->
    <section class="cta__area mb--120">
        <div class="container">
            <div class="cta__inner blue-bg fix">
                <div class="cta__shape">
                    <img src="<?php echo base_url('assets/user/'); ?>assets/img/cta/cta-shape.png" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                        <div class="cta__content">
                            <h3 class="cta__title">You can be your own Guiding star with our help</h3>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                        <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                            <a href="contact.php" class="e-btn e-btn-white">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->


</main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>