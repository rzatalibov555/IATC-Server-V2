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
            <div class="card-header">Galereya Şəkil əlavə et
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

                <form action="<?php echo base_url('Gallery/add_image/'.$gallery_data->gallery_id); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noBlock">

                        <label for="">Şəkil seçin</label>
                        <input type="hidden" value="<?php echo $gallery_data->gallery_id; ?>" name="gallery_id">
                        <input type="file" class="form-control" name="file" style="padding: 3px;">

                    </div>

                    <br>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 noBlock">
                        <div class="row">
                            <button type="submit" class="btn btn-info btn-block" style="margin-top: 23px; height: 40px;">Yenilə</button>
                        </div>
                    </div>

                </form>

                <hr>
                
                <div class="row" style="display: block;margin-top: 150px;">

                    <?php foreach($gallery_list as $item){ ?>
                        <div class="col-lg-3" style="margin-bottom: 10px;border: 1px solid grey;border-radius: 5px;padding: 5px;">
                            <img style="width: 100%;margin-bottom: 5px;" src="<?php echo base_url('upload/gallery/'.$item['gallery_image_name']); ?>" alt="">
                            <a href="<?php echo base_url('Gallery/delete_gallery_image/'.$item['gallery_list_id']); ?>" class="btn btn-danger btn-xs">Sil</a>
                        </div>
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
