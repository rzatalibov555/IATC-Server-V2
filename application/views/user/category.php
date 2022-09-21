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
                            <h3 class="page__title"><?php echo $this->lang->line('courses'); ?></h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line('courses'); ?></li>
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
                                                    <rect x="3" y="3" class="st0" width="7" height="7"/>
                                                    <rect x="14" y="3" class="st0" width="7" height="7"/>
                                                    <rect x="14" y="14" class="st0" width="7" height="7"/>
                                                    <rect x="3" y="14" class="st0" width="7" height="7"/>
                                                </svg>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link list" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                                <svg class="list" viewBox="0 0 512 512">
                                                    <g id="Layer_2_1_">
                                                        <path class="st0" d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z"/>
                                                        <circle class="st0" cx="64" cy="100" r="31"/>
                                                        <path class="st0" d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z"/>
                                                        <circle class="st0" cx="64" cy="256" r="31"/>
                                                        <path class="st0" d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z"/>
                                                        <circle class="st0" cx="64" cy="412" r="31"/>
                                                    </g>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course__view">
                                    <?php if(count($category) == '0'){ ?>
                                        <b><?php echo $this->lang->line('find_in_category')." ".$this->lang->line('no_find_course'); ?></b>
                                    <?php }else{ ?>
                                        <b><?php echo $this->lang->line('find_in_category'); ?><?php echo count($category)." ". $this->lang->line('fing_course'); ?></b>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                        <!--                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">-->
                        <!--                        -->
                        <!--                     </div>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="course__tab-conent">
                            <div class="tab-content" id="courseTabContent">
                                <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                    <div class="row">

                                        <?php foreach ($category as $all_courses_key) { ?>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <div class="course__item white-bg mb-30 fix">
                                                    <div class="course__thumb w-img p-relative fix">
                                                        <a href="<?php echo base_url('course_single/'.$all_courses_key['c_id']); ?>">
                                                            <img height="220" style="object-fit: cover;" src="<?php echo base_url('upload/courses/'.$all_courses_key['img']); ?>" alt="">
                                                        </a>
                                                        <div class="course__tag">
                                                            <a href="<?php echo base_url('category/'.$all_courses_key['i_c_id']); ?>"><?php echo $all_courses_key['i_c_name']; ?></a>
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
                                                        <h3 class="course__title"><a href="<?php echo base_url('course_single/'.$all_courses_key['c_id']); ?>"><?php echo $all_courses_key['title_'.$this->session->userdata('lang_code')]; ?></a></h3>
                                                        <div class="course__teacher d-flex align-items-center">
                                                            <div class="course__teacher-thumb mr-15">
                                                                <img src="<?php echo base_url('upload/teachers/'.$all_courses_key['t_img']); ?>" alt="">
                                                            </div>
                                                            <h6><a href="<?php echo base_url('instructor_single/'.$all_courses_key['t_id']); ?>"><?php echo $all_courses_key['t_title_'.$this->session->userdata('lang_code')]; ?></a></h6>
                                                        </div>
                                                    </div>

                                                    <style>
                                                        .status_course{
                                                            display: inline-block;
                                                            height: 24px;
                                                            line-height: 24px;
                                                            font-size: 12px!important;
                                                            font-weight: 500;
                                                            color: #ffffff!important;
                                                            background: green;
                                                            padding: 0 10px;
                                                            -webkit-border-radius: 4px;
                                                            -moz-border-radius: 4px;
                                                            border-radius: 4px;
                                                        }

                                                        .status_course span{
                                                            font-size: 12px!important;
                                                            color: #ffffff!important;
                                                        }
                                                    </style>

                                                    <div class="course__more d-flex justify-content-between align-items-center">
                                                        <div class="course__status status_course">
                                                            <?php if($all_courses_key['t_status'] == '1'){ ?>
                                                                <span><?php echo $this->lang->line('active'); ?></span>
                                                            <?php }elseif ($all_courses_key['t_status'] == '2'){ ?>
                                                                <span><?php echo $this->lang->line('deactive'); ?></span>
                                                            <?php }elseif ($all_courses_key['t_status'] == '3'){ ?>
                                                                <span><?php echo $this->lang->line('pending'); ?></span>
                                                            <?php }else{ ?>
                                                                <span>-</span>
                                                            <?php }?>
                                                        </div>
                                                        <div class="course__btn">
                                                            <a href="<?php echo base_url('course_single/'.$all_courses_key['c_id']); ?>" class="link-btn">
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


                                <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                    <div class="row">
                                        <?php foreach ($category as $all_courses_key) { ?>
                                            <div class="col-xxl-12">
                                                <div class="course__item white-bg mb-30 fix">
                                                    <div class="row gx-0">
                                                        <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                            <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                                <a href="<?php echo base_url('course_single/'.$all_courses_key['c_id']); ?>">
                                                                    <img style="object-fit: contain; height: 230px;" src="<?php echo base_url('upload/courses/'.$all_courses_key['img']); ?>" alt="">
                                                                </a>
                                                                <div class="course__tag">
                                                                    <a href="#"><?php echo $all_courses_key['i_c_name']; ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                            <div class="course__right">
                                                                <div class="course__content course__content-3">
                                                                    <div class="course__meta d-flex align-items-center">
                                                                        <div class="course__lesson mr-20">
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
                                                                    <h3 class="course__title course__title-3">
                                                                        <a href="<?php echo base_url('course_single/'.$all_courses_key['c_id']); ?>"><?php echo $all_courses_key['title_'.$this->session->userdata('lang_code')]; ?></a>
                                                                    </h3>

                                                                    <div class="course__teacher d-flex align-items-center">
                                                                        <div class="course__teacher-thumb mr-15">
                                                                            <img src="<?php echo base_url('upload/teachers/'.$all_courses_key['t_img']); ?>" alt="">
                                                                        </div>
                                                                        <h6><a href="<?php echo base_url('instructor_single/'.$all_courses_key['t_id']); ?>"><?php echo $all_courses_key['t_title_'.$this->session->userdata('lang_code')]; ?></a></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                                    <div class="course__status status_course">
                                                                        <?php if($all_courses_key['t_status'] == '1'){ ?>
                                                                            <span><?php echo $this->lang->line('active'); ?></span>
                                                                        <?php }elseif ($all_courses_key['t_status'] == '2'){ ?>
                                                                            <span><?php echo $this->lang->line('deactive'); ?></span>
                                                                        <?php }elseif ($all_courses_key['t_status'] == '3'){ ?>
                                                                            <span><?php echo $this->lang->line('pending'); ?></span>
                                                                        <?php }else{ ?>
                                                                            <span>-</span>
                                                                        <?php }?>
                                                                    </div>
                                                                    <div class="course__btn">
                                                                        <a href="<?php echo base_url('course_single/'.$all_courses_key['c_id']); ?>" class="link-btn">
                                                                        <?php echo $this->lang->line('more'); ?>
                                                                            <i class="far fa-arrow-right"></i>
                                                                            <i class="far fa-arrow-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
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

        <!-- cta area start -->
        <!-- <section class="cta__area mb--120">
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
        </section> -->
        <!-- cta area end -->


    </main>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>