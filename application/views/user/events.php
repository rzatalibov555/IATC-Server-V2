<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/other_navbar'); ?>
<style>
    .blog__tag a{
        background: #0fa0dd!important;
        color: white!important;
    }
</style>
    <main>

        <!-- page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-wrapper mt-110">
                            <h3 class="page__title"><?php echo $this->lang->line('events'); ?></h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line('events'); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- blog area start -->
        <section class="blog__area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="row">


                            <?php foreach ($events_all as $events_all_key){ ?>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                    <div class="blog__wrapper">
                                        <div class="blog__item white-bg mb-30 transition-3 fix">
                                            <div class="blog__thumb w-img fix">
                                                <a href="<?php echo base_url('event-details/'.$events_all_key['ev_id']); ?>">
                                                    <img style="object-fit: cover; height: 265px;" src="<?php echo base_url('upload/events/'.$events_all_key['ev_img']); ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="blog__content">
                                                <div class="blog__tag" >
                                                    <a style="padding: 2px 5px!important;" href="#"><?php echo $events_all_key['i_c10_name']; ?></a>
                                                </div>
                                                <h3 class="blog__title" style="margin-bottom: 15px!important"><a href="<?php echo base_url('event-details/'.$events_all_key['ev_id']); ?>"><?php echo $events_all_key['ev_title_'.$this->session->userdata('lang_code')]; ?></a></h3>


                                                <div class="blog__meta d-flex align-items-center justify-content-between">
                                                    <div class="blog__author d-flex align-items-center">
                                                        <div class="blog__author-info">
                                                            <h5><?php echo $events_all_key['ev_group_size']; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="blog__date d-flex align-items-center">
                                                        <i class="fal fa-clock"></i>
                                                        <span><?php echo date("d-m-Y", strtotime($events_all_key['ev_date'])); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
<!--                        <div class="row">-->
<!--                            <div class="col-xxl-12">-->
<!--                                <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">-->
<!--                                    <ul class="d-flex align-items-center">-->
<!--                                        <li class="prev">-->
<!--                                            <a href="blog.php" class="link-btn link-prev">-->
<!--                                                Prev-->
<!--                                                <i class="arrow_left"></i>-->
<!--                                                <i class="arrow_left"></i>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="#">-->
<!--                                                <span>1</span>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li class="active">-->
<!--                                            <a href="blog.php">-->
<!--                                                <span>2</span>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="blog.php">-->
<!--                                                <span>3</span>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li class="next">-->
<!--                                            <a href="blog.php" class="link-btn">-->
<!--                                                Next-->
<!--                                                <i class="arrow_right"></i>-->
<!--                                                <i class="arrow_right"></i>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
<!--                    <div class="col-xxl-12 col-xl-12 col-lg-12">-->
<!--                        <div class="blog__sidebar pl-70">-->
<!--                            <div class="sidebar__widget mb-60">-->
<!--                                <div class="sidebar__widget-content">-->
<!--                                    <div class="sidebar__search p-relative">-->
<!--                                        <form action="#">-->
<!--                                            <input type="text" placeholder="Search for courses...">-->
<!--                                            <button type="submit">-->
<!--                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 584.4 584.4" style="enable-background:new 0 0 584.4 584.4;" xml:space="preserve">-->
<!--                                       <g>-->
<!--                                           <g>-->
<!--                                               <path class="st0" d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z"/>-->
<!--                                               <path class="st1" d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z"/>-->
<!--                                           </g>-->
<!--                                       </g>-->
<!--                                       </svg>-->
<!--                                            </button>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="sidebar__widget mb-55">-->
<!--                                <div class="sidebar__widget-head mb-35">-->
<!--                                    <h3 class="sidebar__widget-title">Digər tədbirlər</h3>-->
<!--                                </div>-->
<!--                                <div class="sidebar__widget-content">-->
<!--                                    <div class="rc__post-wrapper">-->
<!--                                        <div class="rc__post d-flex align-items-center">-->
<!--                                            <div class="rc__thumb mr-20">-->
<!--                                                <a href="blog-details.php"><img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/blog/sm/blog-sm-1.jpg" alt=""></a>-->
<!--                                            </div>-->
<!--                                            <div class="rc__content">-->
<!--                                                <div class="rc__meta">-->
<!--                                                    <span>October 15, 2021</span>-->
<!--                                                </div>-->
<!--                                                <h6 class="rc__title"><a href="blog-details.php">The Importance  Intrinsic Motivation.</a></h6>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="rc__post d-flex align-items-center">-->
<!--                                            <div class="rc__thumb mr-20">-->
<!--                                                <a href="blog-details.php"><img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/blog/sm/blog-sm-2.jpg" alt=""></a>-->
<!--                                            </div>-->
<!--                                            <div class="rc__content">-->
<!--                                                <div class="rc__meta">-->
<!--                                                    <span>March 26, 2021</span>-->
<!--                                                </div>-->
<!--                                                <h6 class="rc__title"><a href="blog-details.php">A Better Alternative To Grading Student.</a></h6>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="rc__post d-flex align-items-center">-->
<!--                                            <div class="rc__thumb mr-20">-->
<!--                                                <a href="blog-details.php"><img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/blog/sm/blog-sm-3.jpg" alt=""></a>-->
<!--                                            </div>-->
<!--                                            <div class="rc__content">-->
<!--                                                <div class="rc__meta">-->
<!--                                                    <span>October 15, 2021</span>-->
<!--                                                </div>-->
<!--                                                <h6 class="rc__title"><a href="blog-details.php">Strategic Social Media & Evolution of Visual</a></h6>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="sidebar__widget mb-55">-->
<!--                                <div class="sidebar__widget-head mb-35">-->
<!--                                    <h3 class="sidebar__widget-title">Category</h3>-->
<!--                                </div>-->
<!--                                <div class="sidebar__widget-content">-->
<!--                                    <div class="sidebar__category">-->
<!--                                        <ul>-->
<!--                                            <li><a href="blog.php">Category</a></li>-->
<!--                                            <li><a href="blog.php">Video & Tips  (4)</a></li>-->
<!--                                            <li><a href="blog.php">Education  (8)</a></li>-->
<!--                                            <li><a href="blog.php">Business  (5)</a></li>-->
<!--                                            <li><a href="blog.php">UX Design  (3)</a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="sidebar__widget mb-55">-->
<!--                                <div class="sidebar__widget-head mb-35">-->
<!--                                    <h3 class="sidebar__widget-title">Tags</h3>-->
<!--                                </div>-->
<!--                                <div class="sidebar__widget-content">-->
<!--                                    <div class="sidebar__tag">-->
<!--                                        <a href="#">Art & Design</a>-->
<!--                                        <a href="#">Course</a>-->
<!--                                        <a href="#">Videos</a>-->
<!--                                        <a href="#">App</a>-->
<!--                                        <a href="#">Education</a>-->
<!--                                        <a href="#">Data Science</a>-->
<!--                                        <a href="#">Machine Learning</a>-->
<!--                                        <a href="#">Tips</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="sidebar__widget mb-55">-->
<!--                                <div class="sidebar__banner w-img">-->
<!--                                    <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/blog/banner/banner-1.jpg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </section>
        <!-- blog area end -->

    </main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>