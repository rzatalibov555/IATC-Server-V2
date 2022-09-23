<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

<!-- header area start -->
<header>
    <div id="header-sticky" class="header__area header__transparent header__padding">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                    <div class="header__left d-flex">
                        <div class="logo">
                        <a href="<?php echo base_url('index'); ?>">
                                <img class="logo-white " src="<?php echo base_url('assets/user/'); ?>assets/img/logo/IATC_DarkLogo.png" alt="logo">
                                <img class="logo-black L_img" src="<?php echo base_url('assets/user/'); ?>assets/img/logo/IATC_DarkLogo.png" alt="logo">
                            </a>
                        </div>
                        <!-- <div class="header__category d-none d-lg-block"> -->
                            <!-- <nav>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url("category_list"); ?>" class="cat-menu d-flex align-items-center">
                                            <div class="cat-dot-icon d-inline-block">
                                                <svg viewBox="0 0 276.2 276.2">
                                                    <g>
                                                        <g>
                                                            <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>
                                                            <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>
                                                            <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>
                                                            <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>
                                                            <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>
                                                            <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>
                                                            <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>
                                                            <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>
                                                            <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <span><?php echo $this->lang->line('category'); ?></span>
                                        </a>
                                        <?php $allCategory_list = $this->db->limit(9)->order_by('i_c_id','DESC')->get('item_category')->result_array(); ?>
                                        <?php if($allCategory_list){ ?>
                                            <ul class="cat-submenu">
                                                <?php foreach ($allCategory_list as $allCategory_list_key){ ?>
                                                    <li><a href="<?php echo base_url('category/'.$allCategory_list_key['i_c_id']); ?>"><?php echo $allCategory_list_key['i_c_name']; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>


                                    </li>
                                </ul>
                            </nav> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                    <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('home'); ?></a>
                                    </li>
<!--                                  li  has-dropdown-->
                                    <li class="has-dropdown">
                                        <a href="<?php echo base_url('courses'); ?>"><?php echo $this->lang->line('courses'); ?></a>
                                        
                                        <?php $allCategory_list = $this->db->limit(12)->order_by('i_c_id','DESC')->get('item_category')->result_array(); ?>
                                        <?php if($allCategory_list){ ?>
                                            <ul class="submenu" style="overflow-y: scroll; height:500px!important;">
                                                <?php foreach ($allCategory_list as $allCategory_list_key){ ?>
                                                    <li><a href="<?php echo base_url('category/'.$allCategory_list_key['i_c_id']); ?>"><?php echo $allCategory_list_key['i_c_name']; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                        
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('gallery'); ?>"><?php echo $this->lang->line('gallery'); ?></a>
                                    </li>
<!--                                    <li class="">-->
<!--                                        <a href="--><?php //echo base_url('blog'); ?><!--">Blog</a>-->
<!--                                        <ul class="submenu">-->
<!--                                            <li><a href="blog.html">Blog</a></li>-->
<!--                                            <li><a href="blog-details.html">Blog Details</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
                                    <li class="">
                                        <a href="<?php echo base_url('instructor'); ?>"><?php echo $this->lang->line('teachers'); ?></a>
                                    </li>
<!--                                    <li class="has-dropdown">-->
<!--                                        <a href="course-grid.html">Pages</a>-->
<!--                                        <ul class="submenu">-->
<!---->
<!--                                            <li><a href="--><?php //echo base_url('instructor'); ?><!--">Instructor</a></li>-->
<!--                                            <li><a href="--><?php //echo base_url('instructor_single/1'); ?><!--">Instructor Details</a></li>-->
<!--                                            <li><a href="event-details.html">Event Details</a></li>-->
<!--                                            <li><a href="cart.html">My Cart</a></li>-->
<!--                                            <li><a href="wishlist.html">My Wishlist</a></li>-->
<!--                                            <li><a href="checkout.html">checkout</a></li>-->
<!--                                            <li><a href="--><?php //echo base_url('sign_in'); ?><!--">Sign In</a></li>-->
<!--                                            <li><a href="--><?php //echo base_url('sign_up'); ?><!--">Sign Up</a></li>-->
<!--                                            <li><a href="--><?php //echo base_url('error404'); ?><!--">Error</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
                                    <li><a href="<?php echo base_url('about'); ?>"><?php echo $this->lang->line('about'); ?></a></li>
                                    <style>
                                        .designSelect {
                                            background: transparent;
                                            font-weight: 600;
                                            border: none;
                                            cursor: pointer;
                                            color: #2b4eff;
                                            outline: none;
                                        }
                                    </style>
                                    <li>
                                        <select class="designSelect mobDesignSelect" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
                                            <option class="opt" value="azerbaijan" <?php if ($this->session->userdata('site_lang') == 'azerbaijan') echo 'selected="selected"'; ?>>AZ</option>
                                            <option class="opt" value="english" <?php if ($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>EN</option>
                                            <option class="opt" value="russian" <?php if ($this->session->userdata('site_lang') == 'russian') echo 'selected="selected"'; ?>>RU</option>
                                            <option class="opt" value="turkish" <?php if ($this->session->userdata('site_lang') == 'turkish') echo 'selected="selected"'; ?>>TR</option>
                                        </select>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header__search p-relative ml-50 d-none d-md-block">
                            <form action="<?php echo base_url('search_act'); ?>" method="GET">
                                <input type="text" name="q" placeholder="<?php echo $this->lang->line('search'); ?>...">
                                <button type="submit"><i class="fad fa-search"></i></button>
                            </form>
<!--                            <div class="header__cart">-->
<!--                                <a href="javascript:void(0);" class="cart-toggle-btn">-->
<!--                                    <div class="header__cart-icon">-->
<!--                                        <svg viewBox="0 0 24 24">-->
<!--                                            <circle class="st0" cx="9" cy="21" r="1"/>-->
<!--                                            <circle class="st0" cx="20" cy="21" r="1"/>-->
<!--                                            <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>-->
<!--                                        </svg>-->
<!--                                    </div>-->
<!--                                    <span class="cart-item">2</span>-->
<!--                                </a>-->
<!--                            </div>-->
                        </div>
                        <div class="header__btn ml-20 d-none d-sm-block">
                            <a href="<?php echo base_url('contact'); ?>" class="e-btn"><?php echo $this->lang->line('contact'); ?></a>
                        </div>
                        <div class="sidebar__menu d-xl-none">
                            <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->