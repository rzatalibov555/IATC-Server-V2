<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/other_navbar'); ?>

<main>

    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title"><?php echo $this->lang->line('search'); ?></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line('search'); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- course area start -->
    <section class="course__area pt-120 pb-120">
        <div class="container">
            <div class="course__tab-inner grey-bg-2 mb-50">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__tab-wrapper d-flex align-items-center">
                            <div class="course__tab-btn">
                                <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                            <svg class="grid" viewBox="0 0 24 24">
                                                <rect x="3" y="3" class="st0" width="7" height="7" />
                                                <rect x="14" y="3" class="st0" width="7" height="7" />
                                                <rect x="14" y="14" class="st0" width="7" height="7" />
                                                <rect x="3" y="14" class="st0" width="7" height="7" />
                                            </svg>
                                        </button>
                                    </li>

                                </ul>
                            </div>
                            <div class="course__view">
                                <b><?php echo count($all_courses) . " " . $this->lang->line('find_search'); ?></b>

                            </div>
                        </div>
                    </div>
                    <!--                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">-->
                    <!--                        -->
                    <!--                     </div>-->
                </div>
            </div>

            <style>
                .f_size {
                    font-size: 10px !important;
                    padding-right: 0px !important;
                }
            </style>
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
            <div class="row">
                <div class="col-xxl-12">
                    <div class="course__tab-conent">
                        <div class="tab-content" id="courseTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="row" style="display: flex!important; justify-content:center!important;">

                                    <?php foreach ($all_courses as $all_courses_key) { ?>

                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                                            <div class="course__item white-bg mb-30 fix">
                                                <div class="course__thumb w-img p-relative fix">
                                                    <a href="<?php echo base_url('course_single/' . $all_courses_key['c_id']); ?>">
                                                        <?php if ($all_courses_key['img']) { ?>
                                                            <img height="220" style="object-fit: cover;" src="<?php echo base_url('upload/courses/' . $all_courses_key['img']); ?>" alt="">
                                                        <?php } else { ?>
                                                            <img height="220" style="object-fit: cover;" src="<?php echo base_url('assets/user/assets/img/logo/IATC_DarkLogo.png'); ?>" alt="">
                                                        <?php } ?>

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

                                                    </div>
                                                    <h3 class="course__title"><a href="<?php echo base_url('course_single/' . $all_courses_key['c_id']); ?>"><?php echo $all_courses_key['title_' . $this->session->userdata('lang_code')]; ?></a></h3>
                                                    <div class="course__teacher d-flex align-items-center">
                                                        <div class="course__teacher-thumb mr-15">

                                                            <?php if ($all_courses_key['t_img']) { ?>
                                                                <img src="<?php echo base_url('upload/teachers/' . $all_courses_key['t_img']); ?>" alt="">
                                                            <?php } else { ?>
                                                                <img style="object-fit: contain;" src="<?php echo base_url('assets/user/assets/img/logo/IATC_DarkLogo.png'); ?>" alt="">
                                                            <?php } ?>
                                                        </div>
                                                        <h6><a href="<?php echo base_url('instructor_single/' . $all_courses_key['t_id']); ?>"><?php echo $all_courses_key['t_title_' . $this->session->userdata('lang_code')]; ?></a></h6>
                                                    </div>
                                                </div>



                                                <div class="course__more d-flex justify-content-between align-items-center">
                                                    <!-- <div class="course__status status_course"> -->
                                                    <!-- <?php if ($all_courses_key['t_status'] == '1') { ?>
                            <span>Aktiv</span>
                        <?php } elseif ($all_courses_key['t_status'] == '2') { ?>
                            <span>Deaktiv</span>
                        <?php } elseif ($all_courses_key['t_status'] == '3') { ?>
                            <span>Gözləmədə</span>
                        <?php } else { ?>
                            <span>-</span>
                        <?php } ?> -->
                                                    <div class="course__rating">
                                                        <span><i class="icon_star f_size"></i></span>
                                                        <span><i class="icon_star f_size"></i></span>
                                                        <span><i class="icon_star f_size"></i></span>
                                                        <span><i class="icon_star f_size"></i></span>
                                                        <span><i class="icon_star f_size"></i></span>
                                                    </div>
                                                    <!-- </div> -->
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
    <!-- course area end -->
    <style>
        .course__content {
            min-height: 186px !important;
        }
    </style>
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
                            <a href="#" class="e-btn e-btn-white">Get Started</a>
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