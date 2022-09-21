<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/other_navbar'); ?>
      <main>

      <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title.jpg">
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

         <!-- page title area start -->
         <section class="page__title-area pt-120">
            <div class="page__title-shape">
               <img class="page-title-shape-5 d-none d-sm-block" src="<?php echo base_url('assets/user/') ?>assets/img/page-title/page-title-shape-1.png" alt="">
               <img class="page-title-shape-6" src="<?php echo base_url('assets/user/') ?>assets/img/page-title/page-title-shape-2.png" alt="">
               <img class="page-title-shape-7" src="<?php echo base_url('assets/user/') ?>assets/img/page-title/page-title-shape-4.png" alt="">
               <img class="page-title-shape-8" src="<?php echo base_url('assets/user/') ?>assets/img/page-title/page-title-shape-5.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-9 col-xl-8">
                     <div class="page__title-content mb-25 pr-40">
                        <div class="page__title-breadcrumb">                            
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('events'); ?>"><?php echo $this->lang->line('events'); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $events_single['ev_title_'.$this->session->userdata('lang_code')]; ?></li>
                              </ol>
                            </nav>
                        </div>
                        <span class="page__title-pre purple-bg"><?php echo $events_single['i_c10_name']; ?></span>
                        <h5 class="page__title-3"><?php echo $events_single['ev_title_'.$this->session->userdata('lang_code')]; ?></h5>
                     </div>
                     <div class="course__meta-2 d-sm-flex mb-30">
<!--                        <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">-->
<!--                           <div class="course__teacher-thumb-3 mr-15">-->
<!--                              <img src="assets/img/course/teacher/teacher-1.jpg" alt="">-->
<!--                           </div>-->
<!---->
<!--                        </div>-->
                         <?php if($events_single['ev_date']){ ?>
                             <div class="course__update mr-80 mb-30">
                                 <h5><?php echo $this->lang->line('date'); ?></h5>

                                 <p><?php echo date("d-m-Y", strtotime($events_single['ev_date'])); ?></p>
                             </div>
                         <?php } ?>

                         <?php if($events_single['ev_duration']){ ?>
                             <div class="course__update mr-80 mb-30">
                                 <h5><?php echo $this->lang->line('duration'); ?></h5>
                                 <p><?php echo $events_single['ev_duration']; ?></p>
                             </div>
                         <?php } ?>

<!--                         --><?php //if($events_single['ev_group_size']){ ?>
<!--                             <div class="course__update mr-80 mb-30">-->
<!--                                 <h5>Məkan</h5>-->
<!--                                 <p>--><?php //echo $events_single['ev_group_size']; ?><!--</p>-->
<!--                             </div>-->
<!--                         --><?php //} ?>

                         <?php if($events_single['ev_schedule']){ ?>
                             <div class="course__update mr-80 mb-30">
                                 <h5><?php echo $this->lang->line('location'); ?></h5>
                                 <p><?php echo $events_single['ev_schedule']; ?></p>
                             </div>
                         <?php } ?>






                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- event details area start -->
         <section class="event__area">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                     <div class="events__wrapper">
                        <div class="events__thumb mb-35 w-img" style="display:flex; justify-content: center!important">
                           <img style="width: 50%!important;" src="<?php echo base_url('upload/events/'.$events_single['ev_img']) ?>" alt="">
                        </div>
<!--                        <div class="events__details mb-35">-->
<!--                           <h3></h3>-->
<!--                            --><?php //echo $events_single['ev_description']; ?>
<!--                        </div>-->

                         <div class="course__tab-2 mb-45">
                             <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                 <li class="nav-item" role="presentation">
                                     <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <i class="icon_ribbon_alt"></i> <span><?php echo $this->lang->line('about_event'); ?></span> </button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                     <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span><?php echo $this->lang->line('program'); ?> (<?php echo count($programs); ?>)</span> </button>
                                 </li>
                             </ul>
                         </div>

                         <div class="course__tab-content mb-95">
                             <div class="tab-content" id="courseTabContent">
                                 <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                     <div class="course__description">
                                         <?php echo $events_single['ev_description_'.$this->session->userdata('lang_code')]; ?>
                                     </div>
                                 </div>
                                 <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                     <div class="course__curriculum">
                                         <style>
                                             .textP p{
                                                 margin: 0px;
                                             }
                                         </style>

                                         <?php $coun = 0; foreach ($programs as $programs_item){ $coun++; ?>
                                             <div class="accordion" id="course__accordion<?php echo $coun; ?>">
                                                 <div class="accordion-item mb-10">
                                                     <h2 class="accordion-header" id="week-01<?php echo $coun; ?>">
                                                         <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-01-content<?php echo $coun; ?>" aria-expanded="true" aria-controls="week-01-content<?php echo $coun; ?>">
                                                             <?php echo $programs_item['n_prog_title_'.$this->session->userdata('lang_code')]; ?>
                                                         </button>
                                                     </h2>
                                                     <div id="week-01-content<?php echo $coun; ?>" class="accordion-collapse collapse" aria-labelledby="week-01<?php echo $coun; ?>" data-bs-parent="#course__accordion<?php echo $coun; ?>">
                                                         <div class="accordion-body">

                                                             <style>
                                                                 .textP ul li {
                                                                     list-style-type: disc!important;
                                                                 }
                                                             </style>

                                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                                 <div class="course__curriculum-info">
                                                                     <h3 class="textP">
                                                                         <?php echo $programs_item['n_prog_descr_'.$this->session->userdata('lang_code')]; ?>
                                                                     </h3>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         <?php } ?>

                                     </div>
                                 </div>

                                 <div class="course__share" style="margin-top: 20px">
                                     <h3><?php echo $this->lang->line('share'); ?>:</h3>
                                     <ul>
                                         <li><a href="#" class="fb" ><i class="social_facebook"></i></a></li>
                                         <li><a href="#" class="tw" ><i class="social_twitter"></i></a></li>
                                         <li><a href="#" class="pin" ><i class="social_pinterest"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>


                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                     <div class="events__sidebar pl-70">
                        <div class="events__sidebar-widget white-bg mb-20">
                           <div class="events__sidebar-shape">
                              <img class="events-sidebar-img-2" src="<?php echo base_url('assets/user/') ?>assets/img/events/event-shape-2.png" alt="">
                              <img class="events-sidebar-img-3" src="<?php echo base_url('assets/user/') ?>assets/img/events/event-shape-3.png" alt="">
                           </div>
                           <div class="events__info">

                              <div class="events__info-content mb-35">
                                 <ul>


                                     <?php foreach ($events_all as $events_all_key){ ?>





                                         <li class="d-flex align-items-center">
<!--                                             <div class="events__info-icon">-->
<!--                                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">-->
<!--                                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>-->
<!--                                                     <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>-->
<!--                                          </svg>-->
<!--                                             </div>-->
                                             <a href="<?php echo base_url('event-details/'.$events_all_key['ev_id']); ?>">
                                                 <div class="events__info-item">
                                                     <h4 style="margin-bottom: 0px;"><span><?php echo $events_all_key['ev_title_'.$this->session->userdata('lang_code')]; ?></span></h4>
                                                     <span class="page__title-pre purple-bg" style="margin-bottom: 0px; margin:5px 0px"><?php echo $events_all_key['i_c10_name']; ?></span>
                                                     <span><p><i class="fal fa-calendar"></i> <?php echo date("d-m-Y", strtotime($events_all_key['ev_date'])); ?> </p></span>
                                                 </div>
                                             </a>

                                         </li>

                                     <?php } ?>
                                 </ul>
                              </div>
                              <div class="events__join-btn">
                                 <a href="<?php echo base_url('events'); ?>" class="e-btn e-btn-7 w-100"><?php echo $this->lang->line('all_eventss'); ?> <i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
<!--                        <div class="events__sidebar-widget white-bg">-->
<!--                           <div class="events__sponsor">-->
<!--                              <h3 class="events__sponsor-title">Sponsors</h3>-->
<!--                              <div class="events__sponsor-thumb mb-35">-->
<!--                                 <img src="--><?php //echo base_url('assets/user/') ?><!--assets/img/events/sponsor-logo.png" alt="">-->
<!--                              </div>-->
<!--                              <div class="events__sponsor-info">-->
<!--                                 <h3>Thomas R. Toe</h3>-->
<!--                                 <h4>Email: <span><a href="https://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="03707673736c71774366677660626f2d606c6e">[email&#160;protected]</a></span></h4>-->
<!--                                 <div class="events__social d-xl-flex align-items-center">-->
<!--                                    <h4>Share:</h4>-->
<!--                                    <ul>-->
<!--                                       <li><a href="#" class="fb" ><i class="social_facebook"></i></a></li>-->
<!--                                       <li><a href="#" class="tw" ><i class="social_twitter"></i></a></li>-->
<!--                                       <li><a href="#" class="pin" ><i class="social_pinterest"></i></a></li>-->
<!--                                    </ul>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- event details area end -->

         <!-- cta area start -->
<!--         <section class="cta__area mb--120">-->
<!--            <div class="container">-->
<!--               <div class="cta__inner blue-bg fix">-->
<!--                  <div class="cta__shape">-->
<!--                     <img src="--><?php //echo base_url('assets/user/') ?><!--assets/img/cta/cta-shape.png" alt="">-->
<!--                  </div>-->
<!--                  <div class="row align-items-center">-->
<!--                     <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">-->
<!--                        <div class="cta__content">-->
<!--                           <h3 class="cta__title">You can be your own Guiding star with our help</h3>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                     <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">-->
<!--                        <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">-->
<!--                           <a href="contact.php" class="e-btn e-btn-white">Get Started</a>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </section>-->
         <!-- cta area end -->


      </main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>