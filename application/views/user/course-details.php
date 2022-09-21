<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/other_navbar'); ?>
<meta property="og:url" content="<?php echo current_url(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="IATC" />
<meta property="og:description" content="Your description" />
<meta property="og:image" content="<?php echo base_url('upload/courses/' . $single_course['img']); ?>" />

<main>
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
   <!-- page title area start -->
   <section class="page__title-area pt-120 pb-90">
      <div class="page__title-shape">
         <img class="page-title-shape-5 d-none d-sm-block" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-1.png" alt="">
         <img class="page-title-shape-6" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-6.png" alt="">
         <img class="page-title-shape-7" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-4.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
               <div class="course__wrapper">
                  <div class="page__title-content mb-25">
                     <div class="page__title-breadcrumb">
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                              <li class="breadcrumb-item"><a href="<?php echo base_url('courses'); ?>"><?php echo $this->lang->line('courses'); ?></a></li>
                              <li class="breadcrumb-item active" aria-current="page"><?php echo $single_course['title_' . $this->session->userdata('lang_code')]; ?></li>
                           </ol>
                        </nav>
                     </div>
                     <span class="page__title-pre"><?php echo $single_course['i_c_name']; ?></span>
                     <h5 class="page__title-3"><?php echo $single_course['title_' . $this->session->userdata('lang_code')]; ?></h5>
                  </div>
                  <div class="course__meta-2 d-sm-flex mb-30">
                     <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                        <div class="course__teacher-thumb-3 mr-15">
                           <img src="<?php echo base_url('upload/teachers/' . $single_course['t_img']); ?>" alt="">
                        </div>
                        <div class="course__teacher-info-3">
                           <h5><?php echo $this->lang->line('teacherr'); ?></h5>
                           <p><a href="<?php echo base_url('instructor_single/' . $single_course['t_id']); ?>"><?php echo $single_course['t_title_' . $this->session->userdata('lang_code')]; ?></a></p>
                        </div>
                     </div>


                  </div>
                  <div class="course__img w-img mb-30" style="display: flex; justify-content: center;">
                     <img style="width: 50%!important;" src="<?php echo base_url('upload/courses/' . $single_course['img']); ?>" alt="">
                  </div>
                  <div class="course__tab-2 mb-45">
                     <ul class="nav nav-tabs" id="courseTab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <i class="icon_ribbon_alt"></i> <span><?php echo $this->lang->line('about_course_text'); ?></span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span><?php echo $this->lang->line('program'); ?> (<?php echo count($programs); ?>)</span> </button>
                        </li>
                        <!--                              <li class="nav-item" role="presentation">-->
                        <!--                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> <i class="icon_star_alt"></i> <span>Reviews</span> </button>-->
                        <!--                              </li>-->
                        <!--                              <li class="nav-item" role="presentation">-->
                        <!--                                <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span>Members</span> </button>-->
                        <!--                              </li>-->
                     </ul>
                  </div>
                  <div class="course__tab-content mb-95">
                     <div class="tab-content" id="courseTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                           <div class="course__description">
                              <h3><?php echo $this->lang->line('about_course'); ?></h3>
                              <?php echo $single_course['description_' . $this->session->userdata('lang_code')]; ?>
                              <!--                                    <p>Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how's your father David skive off sloshed, don't get shirty with me chip shop vagabond crikey bugger Queen's English chap. Matie boy nancy boy bite your arm off up the kyver old no biggie fantastic boot, David have it show off show off pick your nose and blow off lost the plot porkies bits and bobs only a quid bugger all mate, absolutely bladdered bamboozled it's your round don't get shirty with me down the pub well. Give us a bell bits and bobs Charles he lost his bottle super my lady cras starkers bite your arm off Queen's English, pardon me horse play Elizabeth a blinding shot chinwag knees up do one David, blag cup of tea Eaton so I said bleeding haggle James Bond cup of char. Gosh William ummm I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do with me nancy boy show off show off pick your nose and blow off spiffing good time lavatory me old mucker, chimney pot what a load of rubbish boot squiffy lost the plot brolly wellies excuse my french.</p>-->

                              <!--                                    <div class="course__tag-2 mb-35 mt-35">-->
                              <!--                                       <i class="fal fa-tag"></i>-->
                              <!--                                       <a href="#">Big data,</a>-->
                              <!--                                       <a href="#">Data analysis,</a>-->
                              <!--                                       <a href="#">Data modeling</a>-->
                              <!--                                    </div>-->
                              <!--                                    <div class="course__description-list mb-45">-->
                              <!--                                       <h4>What is the Target Audience?</h4>-->
                              <!--                                       <ul>-->
                              <!--                                          <li> <i class="icon_check"></i> Business's managers, leaders</li>-->
                              <!--                                          <li> <i class="icon_check"></i> Downloadable lectures, code and design assets for all projects</li>-->
                              <!--                                          <li> <i class="icon_check"></i> Anyone who is finding a chance to get the promotion</li>-->
                              <!--                                       </ul>-->
                              <!--                                    </div>-->





                              <!--                                    <div class="course__instructor mb-45" style="margin-top: 50px">-->
                              <!--                                       <h3>Digər müəllimlərimiz</h3>-->
                              <!--                                       <div class="course__instructor-wrapper d-md-flex align-items-center">-->
                              <!---->
                              <!--                                            --><?php //foreach($teachers as $teachers_item){ 
                                                                                 ?>
                              <!--                                                <a href="--><?php //echo base_url('instructor_single/'.$teachers_item['t_id']); 
                                                                                                ?>
                              <!--">-->
                              <!--                                                    <div class="course__instructor-item d-flex align-items-center mr-70">-->
                              <!--                                                        <div class="course__instructor-thumb mr-20">-->
                              <!--                                                            <img src="--><?php //echo base_url('upload/teachers/'.$teachers_item['t_img']); 
                                                                                                            ?>
                              <!--" alt="">-->
                              <!--                                                        </div>-->
                              <!--                                                        <div class="course__instructor-content">-->
                              <!--                                                            <h3>--><?php //echo $teachers_item['t_title']; 
                                                                                                      ?>
                              <!--</h3>-->
                              <!--                                                            <p>--><?php //echo $teachers_item['t_position_az']; 
                                                                                                      ?>
                              <!--</p>-->
                              <!--                                                        </div>-->
                              <!--                                                    </div>-->
                              <!--                                                </a>-->
                              <!--                                            --><?php //} 
                                                                                 ?>
                              <!--                                           -->
                              <!--                                       </div>-->
                              <!--                                    </div>-->
                           </div>
                        </div>
                        <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                           <div class="course__curriculum">
                              <style>
                                 .textP p {
                                    margin: 0px;
                                 }
                              </style>
                              <!--                                     <h3 style="margin-bottom: 15px;">--><?php //echo $single_course['title']; 
                                                                                                            ?>
                              <!-- <span class="badge" style="color: white; background: #2b4eff; float: right; margin-top: -3px;">Modul sayı: --><?php //echo count($programs); 
                                                                                                                                                   ?>
                              <!--</span></h3>-->
                              <?php $coun = 0;
                              foreach ($programs as $programs_item) {
                                 $coun++; ?>
                                 <div class="accordion" id="course__accordion<?php echo $coun; ?>">
                                    <div class="accordion-item mb-10">
                                       <h2 class="accordion-header" id="week-01<?php echo $coun; ?>">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-01-content<?php echo $coun; ?>" aria-expanded="true" aria-controls="week-01-content<?php echo $coun; ?>">
                                             <?php echo $programs_item['prog_title_' . $this->session->userdata('lang_code')]; ?>
                                          </button>
                                       </h2>
                                       <div id="week-01-content<?php echo $coun; ?>" class="accordion-collapse collapse" aria-labelledby="week-01<?php echo $coun; ?>" data-bs-parent="#course__accordion<?php echo $coun; ?>">
                                          <div class="accordion-body">

                                             <style>
                                                .textP ul li {
                                                   list-style-type: disc !important;
                                                }
                                             </style>

                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <!--                                                                 <svg class="document" viewBox="0 0 24 24">-->
                                                   <!--                                                                     <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>-->
                                                   <!--                                                                     <polyline class="st0" points="14,2 14,8 20,8 "/>-->
                                                   <!--                                                                     <line class="st0" x1="16" y1="13" x2="8" y2="13"/>-->
                                                   <!--                                                                     <line class="st0" x1="16" y1="17" x2="8" y2="17"/>-->
                                                   <!--                                                                     <polyline class="st0" points="10,9 9,9 8,9 "/>-->
                                                   <!--                                                                 </svg>-->
                                                   <h3 class="textP">
                                                      <?php echo $programs_item['prog_descr_' . $this->session->userdata('lang_code')]; ?>
                                                   </h3>
                                                </div>
                                                <!--                                                             <div class="course__curriculum-meta">-->
                                                <!--                                                                 <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>-->
                                                <!--                                                             </div>-->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              <?php } ?>

                           </div>
                        </div>
                        <!--                              <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">-->
                        <!--                                 <div class="course__review">-->
                        <!--                                    <h3>Reviews</h3>-->
                        <!--                                    <p>Gosh william I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do</p>-->
                        <!---->
                        <!--                                    <div class="course__review-rating mb-50">-->
                        <!--                                       <div class="row g-0">-->
                        <!--                                          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">-->
                        <!--                                             <div class="course__review-rating-info grey-bg text-center">-->
                        <!--                                                <h5>5</h5>-->
                        <!--                                                <ul>-->
                        <!--                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                   <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                </ul>-->
                        <!--                                                <p>4 Ratings</p>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">-->
                        <!--                                             <div class="course__review-details grey-bg">-->
                        <!--                                                <h5>Detailed Rating</h5>-->
                        <!--                                                <div class="course__review-content mb-20">-->
                        <!--                                                   <div class="course__review-item d-flex align-items-center justify-content-between">-->
                        <!--                                                      <div class="course__review-text">-->
                        <!--                                                         <span>5 stars</span>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-progress">-->
                        <!--                                                         <div class="single-progress" data-width="100%"></div>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-percent">-->
                        <!--                                                         <h5>100%</h5>-->
                        <!--                                                      </div>-->
                        <!--                                                   </div>-->
                        <!--                                                   <div class="course__review-item d-flex align-items-center justify-content-between">-->
                        <!--                                                      <div class="course__review-text">-->
                        <!--                                                         <span>4 stars</span>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-progress">-->
                        <!--                                                         <div class="single-progress" data-width="30%"></div>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-percent">-->
                        <!--                                                         <h5>30%</h5>-->
                        <!--                                                      </div>-->
                        <!--                                                   </div>-->
                        <!--                                                   <div class="course__review-item d-flex align-items-center justify-content-between">-->
                        <!--                                                      <div class="course__review-text">-->
                        <!--                                                         <span>3 stars</span>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-progress">-->
                        <!--                                                         <div class="single-progress" data-width="0%"></div>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-percent">-->
                        <!--                                                         <h5>0%</h5>-->
                        <!--                                                      </div>-->
                        <!--                                                   </div>-->
                        <!--                                                   <div class="course__review-item d-flex align-items-center justify-content-between">-->
                        <!--                                                      <div class="course__review-text">-->
                        <!--                                                         <span>2 stars</span>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-progress">-->
                        <!--                                                         <div class="single-progress" data-width="0%"></div>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-percent">-->
                        <!--                                                         <h5>0%</h5>-->
                        <!--                                                      </div>-->
                        <!--                                                   </div>-->
                        <!--                                                   <div class="course__review-item d-flex align-items-center justify-content-between">-->
                        <!--                                                      <div class="course__review-text">-->
                        <!--                                                         <span>1 stars</span>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-progress">-->
                        <!--                                                         <div class="single-progress" data-width="0%"></div>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__review-percent">-->
                        <!--                                                         <h5>0%</h5>-->
                        <!--                                                      </div>-->
                        <!--                                                   </div>-->
                        <!--                                                </div>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                       </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="course__comment mb-75">-->
                        <!--                                       <h3>2 Comments</h3>-->
                        <!---->
                        <!--                                       <ul>-->
                        <!--                                          <li>-->
                        <!--                                             <div class="course__comment-box ">-->
                        <!--                                                <div class="course__comment-thumb float-start">-->
                        <!--                                                   <img src="--><?php //echo base_url('assets/user/'); 
                                                                                             ?>
                        <!--assets/img/course/comment/course-comment-1.jpg" alt="">-->
                        <!--                                                </div>-->
                        <!--                                                <div class="course__comment-content">-->
                        <!--                                                   <div class="course__comment-wrapper ml-70 fix">-->
                        <!--                                                      <div class="course__comment-info float-start">-->
                        <!--                                                         <h4>Eleanor Fant</h4>-->
                        <!--                                                         <span>July 14, 2022</span>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__comment-rating float-start float-sm-end">-->
                        <!--                                                         <ul>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#" > <i class="icon_star"></i> </a></li>-->
                        <!--                                                         </ul>-->
                        <!--                                                      </div>-->
                        <!--                                                   </div>-->
                        <!--                                                   <div class="course__comment-text ml-70">-->
                        <!--                                                      <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh David blatant have it, standard A bit of how's your father my lady absolutely.</p>-->
                        <!--                                                   </div>-->
                        <!--                                                </div>-->
                        <!--                                             </div>-->
                        <!--                                          </li>-->
                        <!--                                          <li>-->
                        <!--                                             <div class="course__comment-box ">-->
                        <!--                                                <div class="course__comment-thumb float-start">-->
                        <!--                                                   <img src="--><?php //echo base_url('assets/user/'); 
                                                                                             ?>
                        <!--assets/img/course/comment/course-comment-2.jpg" alt="">-->
                        <!--                                                </div>-->
                        <!--                                                <div class="course__comment-content">-->
                        <!--                                                   <div class="course__comment-wrapper ml-70 fix">-->
                        <!--                                                      <div class="course__comment-info float-start">-->
                        <!--                                                         <h4>Shahnewaz Sakil</h4>-->
                        <!--                                                         <span>July 17, 2022</span>-->
                        <!--                                                      </div>-->
                        <!--                                                      <div class="course__comment-rating float-start float-sm-end">-->
                        <!--                                                         <ul>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#" class="no-rating"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                         </ul>-->
                        <!--                                                      </div>-->
                        <!--                                                   </div>-->
                        <!--                                                   <div class="course__comment-text ml-70">-->
                        <!--                                                      <p>David blatant have it, standard A bit of how's your father my lady absolutely.</p>-->
                        <!--                                                   </div>-->
                        <!--                                                </div>-->
                        <!--                                             </div>-->
                        <!--                                          </li>-->
                        <!--                                       </ul>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="course__form">-->
                        <!--                                       <h3>Write a Review</h3>-->
                        <!--                                       <div class="course__form-inner">-->
                        <!--                                          <form action="#">-->
                        <!--                                             <div class="row">-->
                        <!--                                                <div class="col-xxl-6">-->
                        <!--                                                   <div class="course__form-input">-->
                        <!--                                                      <input type="text" placeholder="Your Name">-->
                        <!--                                                   </div>-->
                        <!--                                                </div>-->
                        <!--                                                <div class="col-xxl-6">-->
                        <!--                                                   <div class="course__form-input">-->
                        <!--                                                      <input type="email" placeholder="Your Email">-->
                        <!--                                                   </div>-->
                        <!--                                                </div>-->
                        <!--                                                <div class="col-xxl-12">-->
                        <!--                                                   <div class="course__form-input">-->
                        <!--                                                      <input type="text" placeholder="Review Title">-->
                        <!--                                                   </div>-->
                        <!--                                                </div>-->
                        <!--                                                <div class="col-xxl-12">-->
                        <!--                                                   <div class="course__form-input">-->
                        <!--                                                      <div class="course__form-rating">-->
                        <!--                                                         <span>Rating : </span>-->
                        <!--                                                         <ul>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#" class="no-rating" > <i class="icon_star"></i> </a></li>-->
                        <!--                                                            <li><a href="#" class="no-rating" > <i class="icon_star"></i> </a></li>-->
                        <!--                                                         </ul>-->
                        <!--                                                      </div>-->
                        <!--                                                      <textarea placeholder="Review Summary"></textarea>-->
                        <!--                                                   </div>-->
                        <!--                                                </div>-->
                        <!--                                             </div>-->
                        <!--                                             <div class="row">-->
                        <!--                                                <div class="col-xxl-12">-->
                        <!--                                                   <div class="course__form-btn mt-10 mb-55">-->
                        <!--                                                      <button type="submit" class="e-btn">Submit Review</button>-->
                        <!--                                                   </div>-->
                        <!--                                                </div>-->
                        <!--                                             </div>-->
                        <!--                                          </form>-->
                        <!--                                       </div>-->
                        <!--                                    </div>-->
                        <!--                                 </div>-->
                        <!--                              </div>-->
                        <!--                              <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">-->
                        <!--                                 <div class="course__member mb-45">-->
                        <!--                                    <div class="course__member-item">-->
                        <!--                                       <div class="row align-items-center">-->
                        <!--                                          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">-->
                        <!--                                             <div class="course__member-thumb d-flex align-items-center">-->
                        <!--                                                <img src="--><?php //echo base_url('assets/user/'); 
                                                                                          ?>
                        <!--assets/img/course/instructor/course-instructor-1.jpg" alt="">-->
                        <!--                                                <div class="course__member-name ml-20">-->
                        <!--                                                   <h5>Shahnewaz Sakil</h5>-->
                        <!--                                                   <span>Engineer</span>-->
                        <!--                                                </div>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-45">-->
                        <!--                                                <h5>07</h5>-->
                        <!--                                                <span>Courses</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-70">-->
                        <!--                                                <h5>05</h5>-->
                        <!--                                                <span>Reviw</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-85">-->
                        <!--                                                <h5>3.00</h5>-->
                        <!--                                                <span>Rating</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                       </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="course__member-item">-->
                        <!--                                       <div class="row align-items-center">-->
                        <!--                                          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">-->
                        <!--                                             <div class="course__member-thumb d-flex align-items-center">-->
                        <!--                                                <img src="--><?php //echo base_url('assets/user/'); 
                                                                                          ?>
                        <!--assets/img/course/instructor/course-instructor-2.jpg" alt="">-->
                        <!--                                                <div class="course__member-name ml-20">-->
                        <!--                                                   <h5>Lauren Stamps</h5>-->
                        <!--                                                   <span>Teacher</span>-->
                        <!--                                                </div>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-45">-->
                        <!--                                                <h5>05</h5>-->
                        <!--                                                <span>Courses</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-70">-->
                        <!--                                                <h5>03</h5>-->
                        <!--                                                <span>Reviw</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-85">-->
                        <!--                                                <h5>3.00</h5>-->
                        <!--                                                <span>Rating</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                       </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="course__member-item">-->
                        <!--                                       <div class="row align-items-center">-->
                        <!--                                          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 ">-->
                        <!--                                             <div class="course__member-thumb d-flex align-items-center">-->
                        <!--                                                <img src="--><?php //echo base_url('assets/user/'); 
                                                                                          ?>
                        <!--assets/img/course/instructor/course-instructor-3.jpg" alt="">-->
                        <!--                                                <div class="course__member-name ml-20">-->
                        <!--                                                   <h5>Jonquil Von</h5>-->
                        <!--                                                   <span>Associate</span>-->
                        <!--                                                </div>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-45">-->
                        <!--                                                <h5>09</h5>-->
                        <!--                                                <span>Courses</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-70">-->
                        <!--                                                <h5>07</h5>-->
                        <!--                                                <span>Reviw</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                          <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">-->
                        <!--                                             <div class="course__member-info pl-85">-->
                        <!--                                                <h5>4.00</h5>-->
                        <!--                                                <span>Rating</span>-->
                        <!--                                             </div>-->
                        <!--                                          </div>-->
                        <!--                                       </div>-->
                        <!--                                    </div>-->
                        <!--                                 </div>-->
                        <!--                              </div>-->
                        <div class="course__share" style="margin-top: 20px">
                           <h3><?php echo $this->lang->line('share'); ?> :</h3>
                           <ul>

                              <div id="fb-root"></div>
                              <script>
                                 (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                                 }(document, 'script', 'facebook-jssdk'));
                              </script>

                              <!-- Your share button code -->
                              <div class="fb-share-button" data-href="<?php echo current_url(); ?>" data-layout="button_count">
                              </div>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="course__related">
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="section__title-wrapper mb-40">
                              <h2 class="section__title"> <?php echo $this->lang->line('same'); ?> <span class="yellow-bg yellow-bg-big"> <?php echo $this->lang->line('courses_list'); ?><img src="<?php echo base_url('assets/user/'); ?>assets/img/shape/yellow-bg.png" alt=""></span></h2>
                              <p>You don't have to struggle alone, you've got our assistance and help.</p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="course__slider swiper-container pb-60">
                              <div class="swiper-wrapper">


                                 <?php foreach ($all_courses_same_category_courses as $all_courses_key) { ?>
                                    <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="<?php echo base_url('course_single/' . $all_courses_key['c_id']); ?>">
                                             <img style="object-fit: cover;" height="220px" src="<?php echo base_url('upload/courses/' . $all_courses_key['img']); ?>" alt="">
                                          </a>
                                          <div class="course__tag">
                                             <a href="<?php echo base_url('category/' . $all_courses_key['i_c_id']); ?>"><?php echo $all_courses_key['i_c_name']; ?></a>
                                          </div>
                                       </div>
                                       <div class="course__content" style="min-height: 188px;">
                                          <div class="course__meta d-flex align-items-center justify-content-between">
                                             <div class="course__lesson">
                                                <span><i class="far fa-book-alt"></i><?php echo $all_courses_key['duration']; ?></span>
                                             </div>
                                             <!--                                                        <div class="course__rating">-->
                                             <!--                                                            <span><i class="icon_star"></i>4.5 (44)</span>-->
                                             <!--                                                        </div>-->
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
                                 <?php } ?>

                              </div>
                              <!-- Add Pagination -->
                              <div class="swiper-pagination"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
               <div class="course__sidebar pl-70 p-relative">
                  <div class="course__shape">
                     <img class="course-dot" src="<?php echo base_url('assets/user/'); ?>assets/img/course/course-dot.png" alt="">
                  </div>
                  <!--                        <div class="course__sidebar-widget-2 white-bg mb-20">-->
                  <!--                           <div class="course__video">-->
                  <!--                              <div class="course__video-thumb w-img mb-25">-->
                  <!--                                 <img src="--><?php //echo base_url('assets/user/'); 
                                                                     ?>
                  <!--assets/img/course/video/course-video.jpg" alt="">-->
                  <!--                                 <div class="course__video-play">-->
                  <!--                                    <a href="https://youtu.be/yJg-Y5byMMw" data-fancybox="" class="play-btn"> <i class="fas fa-play"></i> </a>-->
                  <!--                                 </div>-->
                  <!--                              </div>-->
                  <!--                              <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">-->
                  <!--                                 <div class="course__video-price">-->
                  <!--                                    <h5>$74.<span>00</span> </h5>-->
                  <!--                                    <h5 class="old-price">$129.00</h5>-->
                  <!--                                 </div>-->
                  <!--                                 <div class="course__video-discount">-->
                  <!--                                    <span>68% OFF</span>-->
                  <!--                                 </div>-->
                  <!--                              </div>-->
                  <!--                              <div class="course__video-content mb-35">-->
                  <!--                                 <ul>-->
                  <!--                                    <li class="d-flex align-items-center">-->
                  <!--                                       <div class="course__video-icon">-->
                  <!--                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">-->
                  <!--                                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>-->
                  <!--                                             <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>-->
                  <!--                                          </svg>-->
                  <!--                                       </div>-->
                  <!--                                       <div class="course__video-info">-->
                  <!--                                          <h5><span>Instructor :</span> Eleanor Fant</h5>-->
                  <!--                                       </div>-->
                  <!--                                    </li>-->
                  <!--                                    <li class="d-flex align-items-center">-->
                  <!--                                       <div class="course__video-icon">-->
                  <!--                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">-->
                  <!---->
                  <!--                                             <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>-->
                  <!--                                             <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>-->
                  <!--                                          </svg>-->
                  <!--                                       </div>-->
                  <!--                                       <div class="course__video-info">-->
                  <!--                                          <h5><span>Lectures :</span>14</h5>-->
                  <!--                                       </div>-->
                  <!--                                    </li>-->
                  <!--                                    <li class="d-flex align-items-center">-->
                  <!--                                       <div class="course__video-icon">-->
                  <!--                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">-->
                  <!--                                             <circle class="st0" cx="8" cy="8" r="6.7"/>-->
                  <!--                                             <polyline class="st0" points="8,4 8,8 10.7,9.3 "/>-->
                  <!--                                          </svg>-->
                  <!--                                       </div>-->
                  <!--                                       <div class="course__video-info">-->
                  <!--                                          <h5><span>Duration :</span>6 weeks</h5>-->
                  <!--                                       </div>-->
                  <!--                                    </li>-->
                  <!--                                    <li class="d-flex align-items-center">-->
                  <!--                                       <div class="course__video-icon">-->
                  <!--                                          <svg>-->
                  <!--                                             <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>-->
                  <!--                                             <circle class="st0" cx="8" cy="4.7" r="2.7"/>-->
                  <!--                                          </svg>-->
                  <!--                                       </div>-->
                  <!--                                       <div class="course__video-info">-->
                  <!--                                          <h5><span>Enrolled :</span>20 students</h5>-->
                  <!--                                       </div>-->
                  <!--                                    </li>-->
                  <!--                                    <li class="d-flex align-items-center">-->
                  <!--                                       <div class="course__video-icon">-->
                  <!--                                          <svg>-->
                  <!--                                             <circle class="st0" cx="8" cy="8" r="6.7"/>-->
                  <!--                                             <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>-->
                  <!--                                             <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>-->
                  <!--                                          </svg>-->
                  <!--                                       </div>-->
                  <!--                                       <div class="course__video-info">-->
                  <!--                                          <h5><span>Language :</span>English</h5>-->
                  <!--                                       </div>-->
                  <!--                                    </li>-->
                  <!--                                 </ul>-->
                  <!--                              </div>-->
                  <!--                              <div class="course__payment mb-35">-->
                  <!--                                 <h3>Payment:</h3>-->
                  <!--                                 <a href="#">-->
                  <!--                                    <img src="--><?php //echo base_url('assets/user/'); 
                                                                        ?>
                  <!--assets/img/course/payment/payment-1.png" alt="">-->
                  <!--                                 </a>-->
                  <!--                              </div>-->
                  <!--                              <div class="course__enroll-btn">-->
                  <!--                                 <a href="contact.php" class="e-btn e-btn-7 w-100">Enroll <i class="far fa-arrow-right"></i></a>-->
                  <!--                              </div>-->
                  <!--                           </div>-->
                  <!--                        </div>-->
                  <div class="course__sidebar-widget-2 white-bg mb-20">
                     <div class="course__sidebar-course">
                        <h3 class="course__sidebar-title" style="text-transform:none"><?php echo $this->lang->line('other_courses'); ?></h3>
                        <ul>

                           <?php foreach ($all_courses as $all_courses_item) { ?>
                              <li>
                                 <div class="course__sm d-flex align-items-center mb-30">
                                    <div class="course__sm-thumb mr-20">
                                       <a href="<?php echo base_url('course_single/' . $all_courses_item['c_id']); ?>">
                                          <img src="<?php echo base_url('upload/courses/' . $all_courses_item['img']); ?>" style="object-fit: cover;" alt="">
                                       </a>
                                    </div>
                                    <div class="course__sm-content">
                                       <!--                                                  <div class="course__sm-rating">-->
                                       <!--                                                      <ul>-->
                                       <!--                                                          <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                                       <!--                                                          <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                                       <!--                                                          <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                                       <!--                                                          <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                                       <!--                                                          <li><a href="#"> <i class="icon_star"></i> </a></li>-->
                                       <!--                                                      </ul>-->
                                       <!--                                                  </div>-->

                                       <h4><a href="<?php echo base_url('course_single/' . $all_courses_item['c_id']); ?>"><?php echo $all_courses_item['title_' . $this->session->userdata('lang_code')]; ?></a></h4>
                                       <h5><a href="<?php echo base_url('category/' . $all_courses_item['i_c_id']); ?>" style="color: #2b4eff;"><?php echo $all_courses_item['i_c_name']; ?></a></h5>
                                       <div class="course__sm-price">
                                          <span style="color: #777;"><?php echo $all_courses_item['duration']; ?></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           <?php } ?>



                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- page title area end -->


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
                           <a href="contact.php" class="e-btn e-btn-white">Get Started</a>
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