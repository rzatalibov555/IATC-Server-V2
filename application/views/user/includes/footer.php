<!-- footer area start -->
<footer>
    <div class="footer__area footer-bg">
        <div class="footer__top pt-190 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-head mb-22">
                                <div class="footer__logo">
                                    <a href="index.html">
                                        <img src="<?php echo base_url('assets/user/'); ?>assets/img/logo/logo-2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="footer__widget-body">
                                <!-- <p>Great lesson ideas and lesson plans for ESL teachers! Educators can customize lesson plans to best.</p> -->

                                <div class="footer__social">
                                    <ul>
                                        <li><a href="#"><i class="social_facebook"></i></a></li>
                                        <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                        <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-1">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-head mb-22">
                                <h3 class="footer__widget-title">Company</h3>
                            </div>
                            <div class="footer__widget-body">
                                <div class="footer__link">
                                    <ul>

                                        <li><a href="<?php echo base_url('courses'); ?>">Courses</a></li>
                                        <li><a href="<?php echo base_url('events'); ?>">Events</a></li>
                                        <li><a href="<?php echo base_url('instructor'); ?>">Instructor</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-head mb-22">
                                <h3 class="footer__widget-title">Platform</h3>
                            </div>
                            <div class="footer__widget-body">
                                <div class="footer__link">
                                    <ul>
                                        <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                                        <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">
                        <div class="footer__widget footer__pl-70 mb-50">
                            <div class="footer__widget-head mb-22">
                                <h3 class="footer__widget-title"><?php echo $this->lang->line('subscribe'); ?></h3>
                            </div>
                            <div class="footer__widget-body">
                                <div class="footer__subscribe">
                                    <form action="<?php echo base_url('subscribe'); ?>" method="post">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />
                                        <div class="footer__subscribe-input mb-15">
                                            <input type="email" name="e_mail" placeholder="<?php echo $this->lang->line('your_email'); ?>">
                                            <button type="submit">
                                                <i class="far fa-arrow-right"></i>
                                                <i class="far fa-arrow-right"></i>
                                            </button>
                                        </div>

                                        <style>
                                            .info_message {
                                                color: #0082f1 !important;
                                            }

                                            .err_email_err {
                                                color: red !important;
                                            }

                                            .success_email_message {
                                                color: green !important;
                                            }
                                        </style>
                                        <?php if ($this->session->flashdata('err_email')) { ?>
                                            <p class="info_message"><?php echo $this->session->flashdata('err_email'); ?></p>
                                        <?php } ?>

                                        <?php if ($this->session->flashdata('err_email_err')) { ?>
                                            <p class="err_email_err"><?php echo $this->session->flashdata('err_email_err'); ?></p>
                                        <?php } ?>

                                        <?php if ($this->session->flashdata('success_email')) { ?>
                                            <p class="success_email_message"><?php echo $this->session->flashdata('success_email'); ?></p>
                                        <?php } ?>
                                    </form>
                                    <!-- <p>Get the latest news and updates right at your inbox.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="footer__copyright text-center">
                            <p>© 2022 IATC, <?php echo $this->lang->line('reserved'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>