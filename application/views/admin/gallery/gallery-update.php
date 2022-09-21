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
            <div class="card-header">Galereya Yenilə
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('Gallery/gallery_list'); ?>">
                            <button class="btn btn-info">Geri</button>
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

                <form action="<?php echo base_url('Gallery/update_gallery_act/'.$gallery_data->gallery_id); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />

                    <ul class="tabs">
                        <li class="tab-link current" data-tab="aze">Az</li>
                        <li class="tab-link" data-tab="eng">En</li>
                        <li class="tab-link" data-tab="rus">Ru</li>
                        <li class="tab-link" data-tab="tur">Tr</li>
                    </ul>
                    <br>

                    <div id="aze" class="tab-content current">
                        <label for="taze">Başlıq AZ</label>
                        <input type="text" name="title_az" id="taze" value="<?php echo $gallery_data->gallery_name_az; ?>" class="form-control" placeholder="Başlıq">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("title_az"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>

                    </div>
                    <div id="eng" class="tab-content">
                        <label for="teng">Başlıq EN</label>
                        <input type="text" name="title_en" id="teng" value="<?php echo $gallery_data->gallery_name_en; ?>" class="form-control" placeholder="Başlıq">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("title_en"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>
                    </div>
                    <div id="rus" class="tab-content">
                        <label for="trus">Başlıq RU</label>
                        <input type="text" name="title_ru" id="trus" value="<?php echo $gallery_data->gallery_name_ru; ?>" class="form-control" placeholder="Başlıq">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("title_ru"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>
                    </div>
                    <div id="tur" class="tab-content">
                        <label for="ttre">Başlıq TR</label>
                        <input type="text" name="title_tr" id="ttre" value="<?php echo $gallery_data->gallery_name_tr; ?>" class="form-control" placeholder="Başlıq">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("title_tr"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">
                            <button type="submit" class="btn btn-info btn-block" style="margin-top: 23px; height: 40px;">Yenilə</button>
                        </div>
                    </div>


                </form>

            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle') ; ?>
