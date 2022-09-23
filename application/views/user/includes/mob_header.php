<!-- sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="fal fa-times"></i></span>
                <span><?php echo $this->lang->line('close'); ?></span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="<?php echo base_url('index'); ?>">
                    <img src="<?php echo base_url('assets/user/'); ?>assets/img/logo/logo.png" alt="logo">
                </a>
            </div>
            <div class="mobile-menu fix"></div>

            <div class="sidebar__search p-relative mt-40 ">
                <form action="<?php echo base_url('search_act'); ?>" method="GET">
                    <input type="text" name="q" placeholder="<?php echo $this->lang->line('search'); ?>...">
                    <button type="submit"><i class="fad fa-search"></i></button>
                </form>
            </div>
            <!--               <div class="sidebar__cart mt-30">-->
            <!--                  <a href="#">-->
            <!--                     <div class="header__cart-icon">-->
            <!--                        <svg viewBox="0 0 24 24">-->
            <!--                           <circle class="st0" cx="9" cy="21" r="1"/>-->
            <!--                           <circle class="st0" cx="20" cy="21" r="1"/>-->
            <!--                           <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>-->
            <!--                        </svg>-->
            <!--                     </div>-->
            <!--                     <span class="cart-item">2</span>-->
            <!--                  </a>-->
            <!--               </div>-->
        </div>
    </div>
</div>
<!-- sidebar area end -->
<div class="body-overlay"></div>
<!-- sidebar area end -->