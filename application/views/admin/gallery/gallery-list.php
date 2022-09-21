<?php $this->load->view('admin/includes/headerStyle'); ?>

<?php $this->load->view('admin/includes/leftMenu'); ?>

<?php $this->load->view('admin/includes/navbar'); ?>

<?php $this->load->view('admin/includes/pageName'); ?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">



<script type="text/javascript" src="<?php echo base_url('assets/admin/') ?>assets/scripts/jQueryScript.js"></script>
<div class="row">
    
</div>
<div class="row">

    <div class="col-md-12">

        <div class="main-card mb-3 card">
            <div class="card-header">Galereya
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('Gallery/gallery_create'); ?>">
                          <button class="btn btn-outline-success">Əlavə et</button>
                        </a>
                    </div>
                </div>
            </div>

            <?php if(empty($gallery_list)){ ?>
                <div style="margin: 20px" class="alert alert-info text-center">
                <span>Hər hansı bir məlumat tapılmadı. Məlumat daxil etmək üçün <a href="<?php echo base_url('Gallery/gallery_create'); ?>" style="color: green">əlavə et</a></span>
            </div>
            <?php }else{ 
                ?>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Başlıq</th>
                            <th class="text-center">Əməliyyat</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php $itemCount = 1; $for_switch=0; foreach ($gallery_list as $item){ $for_switch++; ?>
                                <tr>
                                    <td class="text-center text-muted"><?php echo $itemCount++; ?></td>
                                    <td><?php echo $item['gallery_name_az']; ?></td>
                                    <td class="text-center">

                                        <a style="text-decoration: none;" href="<?php echo base_url('Gallery/update_gallery/'.$item['gallery_id']); ?>">
                                            <button class="btn-wide btn btn-outline-warning">Yenilə</button>
                                        </a>

                                        <a style="text-decoration: none;" href="<?php echo base_url('Gallery/add_gallery_image/'.$item['gallery_id']); ?>">
                                            <button class="btn-wide btn btn-outline-warning">Şəkil</button>
                                        </a>

                                            <button
                                                    data-url="<?php echo base_url('Gallery/delete_gallery/'.$item['gallery_id']); ?>"
                                                    class="mr-2 btn-icon btn-icon-only btn btn-outline-danger button_remove">
                                                    <i class="pe-7s-trash btn-icon-wrapper"> </i>
                                            </button>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle'); ?>


<script>
    $(function() {
        $('.toggle_Switch').bootstrapToggle({
            on: 'Aktiv',
            off: 'Deaktiv'
        });
    })
</script>

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
