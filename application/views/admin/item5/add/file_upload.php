<?php $this->load->view('admin/includes/headerStyle'); ?>

<?php $this->load->view('admin/includes/leftMenu'); ?>

<?php $this->load->view('admin/includes/navbar'); ?>

<?php $this->load->view('admin/includes/pageName'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/dropzone/'); ?>dropzone.css" />
<script type="text/javascript" src="<?php echo base_url('assets/admin/dropzone/'); ?>dropzone.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Gallery File Upload
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <a href="<?php echo base_url('admin_item_co_list'); ?>">
                            <button class="btn btn-info">Back</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p20" style="padding: 20px;">

                <?php if ($this->session->flashdata('err')) { ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('err'); ?>
                    </div>
                <?php } ?>






                <div class="container">
                    <div class="row">
                        <div class="col-md-12">




                            
                            <div class="dropzone"></div>
                            <button class="btn btn-success" style="margin-top: 15px;" id="startUpload">UPLOAD</button>
                            <a href="<?php echo base_url('admin_add_photo_form_co/'.$single_item->co_id) ?>">
                            <button class="btn btn-primary" style="margin-top: 15px;" type="button">Get all images</button>
                            </a>
                            <br>
                            <br>
                            <br>

                            <style>
                                .sub_img {
                                    width: 150px;
                                    min-height: 150px;
                                    /* background: red; */
                                    float: left;
                                    margin: 5px;
                                    text-align: center;
                                }

                                .sub_img img {
                                    width: 150px;
                                    height: 150px;
                                    float: left;
                                    object-fit: cover;
                                }
                            </style>

                            
                            <?php $data_gallery = $this->db->order_by('gl_id','DESC')->where('gl_id_main', $single_item->co_id)->get('gallery_list')->result_array(); ?>
                            <?php foreach ($data_gallery as $item) { ?>
                                <div class="sub_img">
                                    <img src="<?php echo base_url($item['gl_img_name']); ?>" alt="">
                                    <p style="margin: 0px;"><b><?php echo date("d-m-Y H:i", strtotime($item['gl_date'])); ?></b></p>



                                    <button data-url="<?php echo base_url('admin_delete_sub_img/' . $item['gl_id']); ?>" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger button_remove" style="margin:10px 0px 15px">
                                        <i class="pe-7s-trash btn-icon-wrapper"> </i>
                                    </button>
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
</div>
</div>
<?php $this->load->view('admin/includes/footerStyle'); ?>


<script>
    //Disabling autoDiscover
    Dropzone.autoDiscover = false;

    $(function() {
        //Dropzone class
        var myDropzone = new Dropzone(".dropzone", {
            url: "<?php echo base_url('admin_image_upload/' . $single_item->co_id); ?>",
            paramName: "file",
            maxFilesize: 2000,
            maxFiles: 9000,
            acceptedFiles: "image/*,application/pdf",
            autoProcessQueue: false,
            addRemoveLinks: true,
            success: function(file, response) {

                $('.button').click();

            }


        });

        $('#startUpload').click(function() {
            myDropzone.processQueue();
        });
    });
</script>

<script>
    $('.button').on('click', function(event) {
        var type = $(this).data('type');
        var status = $(this).data('status');

        $('.button').removeClass('is-active');
        $(this).addClass('is-active');

        $('.notify')
            .removeClass()
            .attr('data-notification-status', status)
            .addClass(type + ' notify')
            .addClass('do-show');

        event.preventDefault();
    })
</script>