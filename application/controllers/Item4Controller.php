<?php

class Item4Controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item4";

        $this->load->model("item4_model");
    }

    public function index(){
        $viewData = new stdClass();


        $items = $this->item4_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }


    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_category = $this->item4_model->get_all_item_category();
        $get_all_item_status   = $this->item4_model->get_all_item_status();
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

        //        $this->form_validation->set_rules("date", "DATE", "required|trim");
        //        $this->form_validation->set_rules("category", "CATEGORY", "required|trim");
        //        $this->form_validation->set_rules("status", "STATUS", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
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

        //            $date     = $_POST['date'];
        //            $category = $_POST['category'];
        //            $status   = $_POST['status'];

            $config['upload_path']      = 'upload/about/';
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
                'ab_title_az'          => $title_az,
                'ab_title_en'       => $title_en,
                'ab_title_ru'       => $title_ru,
                'ab_title_tr'       => $title_tr,
                'ab_description_az'    => $descr_az,
                'ab_description_en' => $descr_en,
                'ab_description_ru' => $descr_ru,
                'ab_description_tr' => $descr_tr,
                //                'ab_date'           => $date,
                //                'ab_category'       => $category,
                'ab_img'            => $img_name,
                'ab_img_ext'        => $img_ext,
                //                'ab_status'         => $status,
                'ab_creater_id'     => $_SESSION['admin_id'],
                'ab_creat_date'     => date("Y-m-d H:i:s"),
            ];

            $data = $this->security->xss_clean($data);


            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item4_model->add($data);

                redirect(base_url('admin_item_ab_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            $get_all_item_category = $this->item4_model->get_all_item_category();
            $get_all_item_status   = $this->item4_model->get_all_item_status();
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
        $item = $this->item4_model->get_single(
            array("ab_id" => $id)
        );

        $get_all_item_category = $this->item4_model->get_all_item_category();
        $get_all_item_status   = $this->item4_model->get_all_item_status();
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
        //        $this->form_validation->set_rules("date", "DATE", "required|trim");
        //        $this->form_validation->set_rules("category", "CATEGORY", "required|trim");
        //        $this->form_validation->set_rules("status", "STATUS", "required|trim");

        $this->form_validation->set_message(
            array(
                'required' => "<b>{field}</b> xanası doldurulmalıdır!",
                'trim'     => "<b>{field}</b> xanasında boşluq daxil etməyin!",
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

            //            $date     = $_POST['date'];
            //            $category = $_POST['category'];
            //            $status   = $_POST['status'];

            $data_id = [
                "ab_id" =>$id,
            ];


            $config['upload_path']      = 'upload/about/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $get_current_img = $this->item4_model->get_single(
                    array("ab_id" => $id)
                );

                $img_name = $get_current_img->ab_img;
                $img_ext  = $get_current_img->ab_img_ext;
            }

            $data = [
                'ab_title_az'          => $title_az,
                'ab_title_en'       => $title_en,
                'ab_title_ru'       => $title_ru,
                'ab_title_tr'       => $title_tr,
                'ab_description_az'    => $descr_az,
                'ab_description_en' => $descr_en,
                'ab_description_ru' => $descr_ru,
                'ab_description_tr' => $descr_tr,
                //                'ab_date'           => $date,
                //                'ab_category'       => $category,
                'ab_img'            => $img_name,
                'ab_img_ext'        => $img_ext,
                //                'ab_status'         => $status,
                'ab_updater_id'     => $_SESSION['admin_id'],
                'ab_update_date'    => date("Y-m-d H:i:s"),
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item4_model->update($data_id, $data);
                redirect(base_url('admin_item_ab_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item4_model->get_single(
                array("ab_id" => $id)
            );

            $get_all_item_category = $this->item4_model->get_all_item_category();
            $get_all_item_status   = $this->item4_model->get_all_item_status();
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

            $this->item4_model->delete(array("ab_id" => $id,));
            redirect(base_url('admin_item_ab_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item4_model->get_single(
            array("ab_id" => $id)
        );

//        $get_all_item_category = $this->item4_model->get_all_item_category();
//        $get_all_item_status   = $this->item4_model->get_all_item_status();
//        $viewData->get_all_item_category = $get_all_item_category;
//        $viewData->get_all_item_status   = $get_all_item_status;

        $viewData->single_item   = $item;

//        print_r('<pre>');
//        print_r($viewData->single_item);
//        die();
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

            $this->item4_model->update(array("ab_id" => $post_id,), array("ab_status" => $response['checkbox_val']));

            echo json_encode($response);

            // if($id){

            //     $isActive = ($this->input->post("id") === "true") ? 1 : 0;

            //     echo gettype($isActive);

            //     // $token = ($this->input->post("token"));
            //     // echo gettype($token);
            //     $this->item_model->update(array("id" => $id,), array("status" => $isActive,));

            // }else{
            //     redirect(base_url('admin_login'));
            //     exit();
            // }

        }else{
            redirect(base_url('admin_login'));
            exit();
        }
    }


}