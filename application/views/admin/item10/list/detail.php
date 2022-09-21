<?php $this->load->view('admin/includes/headerStyle'); ?>

<?php $this->load->view('admin/includes/leftMenu'); ?>

<?php $this->load->view('admin/includes/navbar'); ?>

<?php $this->load->view('admin/includes/pageName'); ?>

<style>
    .p20{
        padding: 20px;
    }

    .noBlock{
        float: left;
    }
</style>
<style>
    ul.tabs{
        margin: 0px;
        padding: 0px;
        list-style: none;
    }
    ul.tabs li{
        background: none;
        color: #222;
        display: inline-block;
        /*padding: 10px 15px;*/
        padding: 5px 10px;
        cursor: pointer;
    }

    ul.tabs li.current{
        /*background: #ededed;*/
        /*color: #222;*/
        background: #16aaff;
        color: white!important;
        border-radius: 5px;
    }

    .tab-content{
        display: none;
        /*background: #ededed;*/
        padding: 15px 0px;
    }

    .tab-content.current{
        display: inherit;
    }

    .tab-link{
        border: 2px solid #16aaff;
        border-radius: 5px;
        color: #16aaff!important;
    }

    .form_error_style{
        color: #FF5B5B;
        font-size: 12px;
        font-weight:bold;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Event Detail
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_item_ev_list'); ?>">
                            <button class="btn btn-info">Back</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p20">

                <?php if($this->session->flashdata('err')){ ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('err'); ?>
                    </div>
                <?php } ?>


                     <ul class="tabs">
                        <li class="tab-link current" data-tab="aze">Az</li>
                        <li class="tab-link" data-tab="eng">En</li>
                        <li class="tab-link" data-tab="rus">Ru</li>
                        <li class="tab-link" data-tab="tur">Tr</li>
                    </ul>
                    <br>





                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 noBlock">
                    <div id="aze" class="tab-content current">
                        <label for="taze"><b>COURSE AZ</b></label>
                        <br>
                            <?php
                            if($single_item->ev_title_az){
                                echo $single_item->ev_title_az;
                            }else{
                                echo "<br><span class='text-danger'><b>No info</b></span> <br>";
                            }
                            ?>

                        <br>
                        <br>

                        <label for="daze"><b>DESCRIPTION AZ</b></label>

                            <?php
                            if($single_item->ev_description_az){
                                echo $single_item->ev_description_az;
                            }else{
                                echo "<br><span class='text-danger'><b>No info</b></span> <br>";
                            }
                            ?>




                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noBlock">
                           <div class="row">
                               <?php $co = 0; foreach ($programm_list as $item_programm) {  $co++; ?>
                                   <button class="accordion"><b>Programm <?php echo $co.") ".$item_programm['n_prog_title_az']; ?></b>
                                       <a href="<?php echo base_url('admin_create_item_ev_p_delete/'.$item_programm['n_prog_id']); ?>" onclick="return confirm('Are you sure want to delete this item?');">
                                           <div class="trashhhh"><i style="color: red; font-weight: bold" class="pe-7s-trash btn-icon-wrapper pull-right"></i></div>
                                       </a>
                                   </button>
                                   <div class="panel coco" style="display: block">
                                       <?php echo $item_programm['n_prog_descr_az']; ?>
                                   </div>
                               <?php } ?>
                           </div>
                        </div>



                    </div>
                    <div id="eng" class="tab-content">
                        <label for="teng"><b>COURSE EN</b></label>
                        <br>
                        <?php
                        if($single_item->ev_title_en){
                            echo $single_item->ev_title_en;
                        }else{
                            echo "<br><span class='text-danger'><b>No info</b></span> <br>";
                        }
                        ?>
                        <br>
                        <br>

                        <label for="deng"><b>DESCRIPTION EN</b></label>
                        <br>
                            <?php
                            if($single_item->ev_description_en){
                                echo $single_item->ev_description_en;
                            }else{
                                echo "<span class='text-danger'><b>No info</b></span>";
                            }
                            ?>



                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noBlock">
                            <div class="row">
                                <?php $co = 0; foreach ($programm_list as $item_programm) {  $co++; ?>
                                    <button class="accordion"><b>Programm <?php echo $co.") ".$item_programm['n_prog_title_en']; ?></b></button>
                                    <div class="panel coco" style="display: block">
                                        <?php echo $item_programm['n_prog_title_az']; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                    <div id="rus" class="tab-content">
                        <label for="trus"><b>COURSE RU</b></label>
                        <br>

                        <?php
                        if($single_item->ev_title_ru){
                            echo $single_item->ev_title_ru;
                        }else{
                            echo "<br><span class='text-danger'><b>No info</b></span> <br>";
                        }
                        ?>
                        <br>
                        <br>
                        <label for="drus"><b>DESCRIPTION RU</b></label>

                        <?php
                        if($single_item->ev_description_ru){
                            echo $single_item->ev_description_ru;
                        }else{
                            echo "<br><span class='text-danger'><b>No info</b></span> <br>";
                        }
                        ?>


                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noBlock">
                            <div class="row">
                                <?php $co = 0; foreach ($programm_list as $item_programm) {  $co++; ?>
                                    <button class="accordion"><b>Programm <?php echo $co.") ".$item_programm['n_prog_title_ru']; ?></b></button>
                                    <div class="panel coco" style="display: block">
                                        <?php echo $item_programm['n_prog_descr_ru']; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                    <div id="tur" class="tab-content">
                        <label for="ttre"><b>COURSE TR</b></label>
                        <br>
                        <?php
                        if($single_item->ev_title_tr){
                            echo $single_item->ev_title_tr;
                        }else{
                            echo "<br><span class='text-danger'><b>No info</b></span> <br>";
                        }
                        ?>
                        <br>
                        <br>
                        <label for="dtur"><b>DESCRIPTION TR</b></label>
                        <?php
                        if($single_item->ev_description_tr){
                            echo $single_item->ev_description_tr;
                        }else{
                            echo "<br><span class='text-danger'><b>No info</b></span> <br>";
                        }
                        ?>


                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noBlock">
                            <div class="row">

                                    <?php $co = 0; foreach ($programm_list as $item_programm) {  $co++; ?>
                                        <button class="accordion"><b>Programm <?php echo $co.") ".$item_programm['n_prog_title_tr']; ?></b></button>
                                        <div class="panel coco" style="display: block">
                                            <?php echo $item_programm['n_prog_descr_tr']; ?>
                                        </div>
                                    <?php } ?>


                            </div>
                        </div>
                    </div>








                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock">
                        <br>
                        <label for="cate"><b>CATEGORY</b></label>
                        <p><?php echo $single_item->i_c10_name; ?></p>
                    </div>



                    <?php if($single_item->ev_date){ ?>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock" style="padding: 0px">
                            <br>
                            <label for="date"><b>START DATE</b></label>
                            <p><?php echo date("d-m-Y", strtotime($single_item->ev_date)); ?></p>
                        </div>
                    <?php } ?>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <br>
                        <label for="status"><b>STATUS</b></label>
                        <p><?php echo $single_item->i_s_name; ?></p>
                    </div>




                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noBlock">
                        <div class="row">
                            <?php if($single_item->ev_duration){ ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock">
                                    <label for="status"><b>LOCATION</b></label>
                                    <p><?php echo $single_item->ev_duration; ?></p>
                                </div>
                            <?php } ?>


                            <?php if($single_item->ev_group_size){ ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock" style="padding: 0px;">
                                    <label for="status"><b>INFO 1</b></label>
                                    <p><?php echo $single_item->ev_group_size; ?></p>
                                </div>
                            <?php } ?>


                            <?php if($single_item->ev_schedule){ ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock">

                                        <label for="status"><b>INFO 2</b></label>
                                        <p><?php echo $single_item->ev_schedule; ?></p>

                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>



                <style>
                    .coco p{
                        margin: 0px;
                    }

                    .trashhhh{
                        width: 20px;
                        height: 20px;
                        background: white;
                        float: right;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        border: 1px solid red;
                        border-radius:4px ;
                    }

                    .accordion {
                        background-color: #16aaff;
                        /*color: #444;*/
                        color: white;
                        cursor: pointer;
                        padding: 10px;
                        width: 100%;
                        border: none;
                        text-align: left;
                        outline: none;
                        font-size: 15px;
                        transition: 0.5s;
                        margin: 5px 0px;
                        border-radius: 4px;
                    }

                    .active, .accordion:hover {
                        /*background-color: #ccc;*/
                    }

                    .panel {
                        padding: 10px 10px;
                        display: none;
                        /*background-color: red;*/
                        border: 2px solid #16aaff;
                        overflow: hidden;
                        width: 100%;
                        margin-bottom: 15px;
                        margin-top: -7px;
                        display: flex;

                    }
                </style>



                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noBlock">
                    <?php if($single_item->ev_img){ ?>
                        <img width="100%" src="<?php echo base_url('upload/events/'.$single_item->ev_img); ?>">
                    <?php }else{ ?>
                        <img width="100%" src="<?php echo base_url('assets/admin/assets/images/no-img.png'); ?>">
                    <?php } ?>
                </div>











            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>