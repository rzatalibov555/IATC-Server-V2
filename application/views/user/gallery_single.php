<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/other_navbar'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/user/light_gallery.css'); ?>">
<main>

   <!-- page title area start -->
   <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title.jpg">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="page__title-wrapper mt-110">
                  <h3 class="page__title"><?php echo $this->lang->line('gallery'); ?></h3>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $this->lang->line('gallery'); ?></li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- page title area end -->

   <!-- course area start -->
   <div class="rs-project style2 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">

        <div class="descrip">
            <h2 class="text-center"><?php echo $gallery_single['co_title_'.$this->session->userdata('lang_code')]; ?></h2>
            <div class="subDescr">
            <?php echo $gallery_single['co_description_'.$this->session->userdata('lang_code')]; ?>
            <b><span style="color: #0e1133;"><?php echo date("d M Y", strtotime($gallery_single['co_date'])); ?></span></b>
            </div>
        </div>


        <div class="row grid">




            <!-- -------------------------------------------- -->

            <link rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css">
            <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
            <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
            <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
            <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
            <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
            <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
            <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
            <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>


           

            <div class="col-lg-12 col-md-12 mb-30 grid-item ">

                <div class="demo-gallery mob_gall_center">
                    <ul class="demo-lightgallery " id="lightgallery">

                        <?php foreach ($gallery as $item) { ?>
                            <!-- <div class="col-lg-3 col-md-3 mb-30 grid-item ">
                            <div class="project-item">
                                <div class="project-img">
                                    <img class="project_img_img" src="<?php echo base_url($item['gl_img_name']); ?>" alt="images">
                                </div>

                            </div>
                        </div> -->

                            <li class="mob_gall" data-src="<?php echo base_url($item['gl_img_name']); ?>">
                                <a href="">
                                    <img class="img-responsive" src="<?php echo base_url($item['gl_img_name']); ?>">
                                    <div class="demo-gallery-poster">
                                        <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
                                    </div>
                                </a>
                            </li>
                        <?php } ?>


                    </ul>

                </div>

            </div>

            <!-- -------------------------------------------- -->



        </div>
    </div>
</div>
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

<script>
   var elements = document.getElementsByClassName('demo-lightgallery');
   for (let item of elements) {
      lightGallery(item, {
         share: false
      })
   }
</script>