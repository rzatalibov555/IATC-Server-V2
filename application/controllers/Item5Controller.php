<?php

class Item5Controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item5";

        $this->load->model("item5_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item5_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }

    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_category = $this->item5_model->get_all_item_category();
        $get_all_item_status   = $this->item5_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function createItemAct(){

        $this->form_validation->set_rules("title_az", "TITLE AZ", "required|trim");
        $this->form_validation->set_rules("descr_az", "DESCRIPTION AZ", "required|trim");

        // $this->form_validation->set_rules("title_en", "TITLE EN", "required|trim");
        // $this->form_validation->set_rules("descr_en", "DESCRIPTION EN", "required|trim");

        // $this->form_validation->set_rules("title_ru", "TITLE RU", "required|trim");
        // $this->form_validation->set_rules("descr_ru", "DESCRIPTION RU", "required|trim");

        // $this->form_validation->set_rules("title_tr", "TITLE TR", "required|trim");
        // $this->form_validation->set_rules("descr_tr", "DESCRIPTION TR", "required|trim");

        $this->form_validation->set_rules("date", "DATE", "required|trim");
        $this->form_validation->set_rules("category", "CATEGORY", "required|trim");
        $this->form_validation->set_rules("status", "STATUS", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanas?? doldurulmal??d??r!",
                'trim'     => "<b>{field}</b> xanas??nda bo??luq daxil etm??yin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $title_az = $_POST['title_az'];
            $descr_az = $_POST['descr_az'];

            $title_en = $_POST['title_en'];
            $descr_en = $_POST['descr_en'];

            $title_ru = $_POST['title_ru'];
            $descr_ru = $_POST['descr_ru'];

            $title_tr = $_POST['title_tr'];
            $descr_tr = $_POST['descr_tr'];

            $date     = $_POST['date'];
            $category = $_POST['category'];
            $status   = $_POST['status'];

            $config['upload_path']      = 'upload/contact/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $img_name = '';
                $img_ext = '.png';
            }

            $data = [
                'co_title_az'          => $title_az,
                'co_title_en'       => $title_en,
                'co_title_ru'       => $title_ru,
                'co_title_tr'       => $title_tr,
                'co_description_az'    => $descr_az,
                'co_description_en' => $descr_en,
                'co_description_ru' => $descr_ru,
                'co_description_tr' => $descr_tr,
                'co_date'           => $date,
                'co_category'       => $category,
                'co_img'            => $img_name,
                'co_img_ext'        => $img_ext,
                'co_status'         => $status,
                'co_creater_id'     => $_SESSION['admin_id'],
                'co_creat_date'     => date("Y-m-d H:i:s"),
            ];

            $data = $this->security->xss_clean($data);


            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item5_model->add($data);

                redirect(base_url('admin_item_co_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            $get_all_item_category = $this->item5_model->get_all_item_category();
            $get_all_item_status   = $this->item5_model->get_all_item_status();
            $viewData->get_all_item_category = $get_all_item_category;
            $viewData->get_all_item_status   = $get_all_item_status;

            $viewData->rootFolder = $this->rootFolder;
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true; //Start form validation variable "set"

            $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);

        }


    }

    public function update_form($id){

        $viewData = new stdClass();

        // get single item
        $item = $this->item5_model->get_single(
            array("co_id" => $id)
        );

        $get_all_item_category = $this->item5_model->get_all_item_category();
        $get_all_item_status   = $this->item5_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;



        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);
    }

    public function updateItemAct($id){

        $this->form_validation->set_rules("title_az", "TITLE AZ", "required|trim");
        $this->form_validation->set_rules("descr_az", "DESCRIPTION AZ", "required|trim");
        $this->form_validation->set_rules("date", "DATE", "required|trim");
        $this->form_validation->set_rules("category", "CATEGORY", "required|trim");
        $this->form_validation->set_rules("status", "STATUS", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanas?? doldurulmal??d??r!",
                'trim'     => "<b>{field}</b> xanas??nda bo??luq daxil etm??yin!",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $title_az = $_POST['title_az'];
            $descr_az = $_POST['descr_az'];

            $title_en = $_POST['title_en'];
            $descr_en = $_POST['descr_en'];

            $title_ru = $_POST['title_ru'];
            $descr_ru = $_POST['descr_ru'];

            $title_tr = $_POST['title_tr'];
            $descr_tr = $_POST['descr_tr'];

            $date     = $_POST['date'];
            $category = $_POST['category'];
            $status   = $_POST['status'];

            $data_id = [
                "co_id" =>$id,
            ];


            $config['upload_path']      = 'upload/contact/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $get_current_img = $this->item5_model->get_single(
                    array("co_id" => $id)
                );

                $img_name = $get_current_img->co_img;
                $img_ext  = $get_current_img->co_img_ext;
            }

            $data = [
                'co_title_az'          => $title_az,
                'co_title_en'       => $title_en,
                'co_title_ru'       => $title_ru,
                'co_title_tr'       => $title_tr,
                'co_description_az'    => $descr_az,
                'co_description_en' => $descr_en,
                'co_description_ru' => $descr_ru,
                'co_description_tr' => $descr_tr,
                'co_date'           => $date,
                'co_category'       => $category,
                'co_img'            => $img_name,
                'co_img_ext'        => $img_ext,
                'co_status'         => $status,
                'co_updater_id'     => $_SESSION['admin_id'],
                'co_update_date'    => date("Y-m-d H:i:s"),
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item5_model->update($data_id, $data);
                redirect(base_url('admin_item_co_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item5_model->get_single(
                array("co_id" => $id)
            );

            $get_all_item_category = $this->item5_model->get_all_item_category();
            $get_all_item_status   = $this->item5_model->get_all_item_status();
            $viewData->get_all_item_category = $get_all_item_category;
            $viewData->get_all_item_status   = $get_all_item_status;

            $viewData->rootFolder = $this->rootFolder;
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true; //Start form validation variable "set"

            $viewData->single_item   = $item;

            $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create",$viewData);

        }

    }

    public function delete($id)
    {

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $this->item5_model->delete(array("co_id" => $id,));
            redirect(base_url('admin_item_co_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item5_model->get_single(
            array("co_id" => $id)
        );

//        $get_all_item_category = $this->item5_model->get_all_item_category();
//        $get_all_item_status   = $this->item5_model->get_all_item_status();
//        $viewData->get_all_item_category = $get_all_item_category;
//        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/detail",$viewData);
    }

    public function isActiveSet(){
        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $response = array(
                'csrfName' => $this->security->get_csrf_token_name(),
                'csrfHash' => $this->security->get_csrf_hash()
            );

            $response['checkbox_val'] = $_POST['checkbox_val'];
            $post_id = $_POST['post_id'];

            $response['checkbox_val'] = $this->security->xss_clean($response['checkbox_val']);
            $post_id = $this->security->xss_clean($post_id);

            $this->item5_model->update(array("co_id" => $post_id,), array("co_status" => $response['checkbox_val']));

            echo json_encode($response);

        }else{
            redirect(base_url('admin_login'));
            exit();
        }
    }



    public function add_photo_form_co($id)
    {

      
        $viewData = new stdClass();

        $item = $this->item5_model->get_single(
            array("co_id" => $id)
        );

        //        $get_all_item_category = $this->item10_model->get_all_item_category();
        //        $get_all_item_status   = $this->item10_model->get_all_item_status();
        //        $viewData->get_all_item_category = $get_all_item_category;
        //        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/file_upload", $viewData);
    }


    public function fileUpload($id)
    {
        $id = $this->security->xss_clean($id);


                                
        if(!empty($_FILES)){ 
            // Include the database configuration file 
            
             
            // File path configuration 
            $uploadDir = "upload/contact/"; 
            // $fileName = basename($_FILES['file']['name']);

            $temp = explode(".", $_FILES["file"]["name"]);
            $rand = rand(111111,666666);
            $newfilename = $rand.round(microtime(true)) . '.' . end($temp);
            // move_uploaded_file($_FILES["file"]["tmp_name"], "../img/imageDirectory/" . $newfilename);

            
            $uploadFilePath = $uploadDir.$newfilename; 
             
            // Upload file to server 
            if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){ 

                // echo json_encode($uploadFilePath);

                $data = [
                    'gl_id_main'    => $id,
                    'gl_img_name'   => $uploadFilePath,
                    'gl_date'       => date("Y-m-d H:i:s"),
                    'gl_creater_id' => $_SESSION['admin_id'],
                ];

               
                $data = $this->security->xss_clean($data);

                if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                    $this->db->insert('gallery_list',$data);
                    
                }else{
                    redirect(base_url('admin_login'));
                    exit();
                }

                
                
            } 
            
            
        } 
    }

    public function delete_sub_img($id){
        $id = $this->security->xss_clean($id);

        if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])) {

            $this->db->where('gl_id', $id)->delete('gallery_list');
            redirect($_SERVER['HTTP_REFERER']);

        } else {
            redirect(base_url('admin_login'));
            exit();
        }

    }



}