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
                            <h3 class="page__title"><?php echo $this->lang->line('category'); ?></h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line('category'); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- course area start -->
        <section class="category__area pt-120 pb-70">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                        <div class="section__title-wrapper mb-45">
                            <h2 class="section__title"><span class="yellow-bg"><?php echo $this->lang->line('all_c'); ?> <img src="<?php echo base_url('assets/user/'); ?>assets/img/shape/yellow-bg-2.png" alt="">  </span><?php echo $this->lang->line('all_categories'); ?>
                            </h2>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <?php foreach ($allCategory as $allCategory_key){ ?>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="category__item mb-30 transition-3 d-flex align-items-center">
                                <a href="<?php echo base_url('category/'.$allCategory_key['i_c_id']) ?>">
                                    <div class="category__icon mr-30">
                                        <svg viewBox="0 0 512 512">
                                            <g>
                                                <path class="st0" d="M178.7,492H120c-55.2,0-100-44.8-100-100V120C20,64.8,64.8,20,120,20h58.7C123.7,20,81,64.8,81,120v272   C81,447.2,123.7,492,178.7,492z M355.5,204.8l18.9-85.5c4.8-24.1,16.7-46.3,34.1-63.7l35.4-35.4c-15.1-1.4-30.7,3.7-42.3,15.3   l-61.1,61.1c-17.4,17.4-29.3,39.6-34.1,63.7L295,217l56.7-11.3C352.9,205.4,354.2,205.1,355.5,204.8L355.5,204.8z"/>
                                                <path class="st1" d="M299,512H120C53.8,512,0,458.2,0,392V120C0,53.8,53.8,0,120,0h183c11,0,20,9,20,20s-9,20-20,20H120   c-44.1,0-80,35.9-80,80v272c0,44.1,35.9,80,80,80h179c44.1,0,80-35.9,80-80V272c0-11,9-20,20-20s20,9,20,20v120   C419,458.2,365.2,512,299,512z M298.9,236.6l56.7-11.3c28.1-5.6,53.7-19.3,73.9-39.6l61.1-61.1c28.5-28.5,28.5-74.8,0-103.2   c-28.5-28.5-74.8-28.5-103.2,0l-61.1,61.1c-20.3,20.3-33.9,45.8-39.6,73.9l-11.3,56.7c-1.3,6.6,0.7,13.3,5.5,18.1   c3.8,3.8,8.9,5.9,14.1,5.9C296.3,237,297.6,236.9,298.9,236.6L298.9,236.6z M462.4,49.7c6.2,6.2,9.7,14.5,9.7,23.3   s-3.4,17.1-9.7,23.3l-61.1,61.1c-14.7,14.7-33.2,24.6-53.5,28.6l-27.3,5.4l5.4-27.3c4.1-20.3,14-38.8,28.6-53.5l61.1-61.1   c6.2-6.2,14.5-9.7,23.3-9.7S456.1,43.4,462.4,49.7L462.4,49.7z"/>
                                                <path class="st2" d="M319,352H101c-11,0-20-9-20-20s9-20,20-20h218c11,0,20,9,20,20S330.1,352,319,352z M211,387   c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25S224.8,387,211,387z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <div class="category__content">
                                    <h4 class="category__title"><a href="<?php echo base_url('category/'.$allCategory_key['i_c_id']); ?>"><?php echo $allCategory_key['i_c_name']; ?></a></h4>
                                    <!--                                    <p>Data is Everything</p>-->
                                </div>
                            </div>
                        </div>

                    <?php } ?>



                </div>
            </div>
        </section>
        <!-- course area end -->

        <!-- cta area start -->
<!--        <section class="cta__area mb--120">-->
<!--            <div class="container">-->
<!--                <div class="cta__inner blue-bg fix">-->
<!--                    <div class="cta__shape">-->
<!--                        <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/cta/cta-shape.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="row align-items-center">-->
<!--                        <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">-->
<!--                            <div class="cta__content">-->
<!--                                <h3 class="cta__title">You can be your own Guiding star with our help</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">-->
<!--                            <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">-->
<!--                                <a href="#" class="e-btn e-btn-white">Get Started</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
        <!-- cta area end -->


    </main>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>