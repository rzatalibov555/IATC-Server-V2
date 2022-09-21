<?php

class Item10Controller extends CI_Controller{

    public $rootFolder = "";
    public $viewFolder = "";
    public $subViewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->rootFolder = "admin";
        $this->viewFolder = "item10";
//        $this->subViewFolder = "add";

        $this->load->model("item10_model");
    }

    public function index(){
        $viewData = new stdClass();



        $items = $this->item10_model->get_all();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

//        $get_all_teachers   = $this->item10_model->get_all_teachers();
//        $viewData->get_all_teachers   = $get_all_teachers;

        $viewData->items = $items;


//        print_r('<pre>');
//        print_r($viewData->items);
//        die();

        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/list",$viewData);
    }


    public function createItem(){
        $viewData = new stdClass();

        $get_all_item_category = $this->item10_model->get_all_item_category();
        $get_all_item_status   = $this->item10_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;


//        $get_all_teachers   = $this->item10_model->get_all_teachers();
//        $viewData->get_all_teachers   = $get_all_teachers;


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

            $date     = $_POST['date'];
            $category = $_POST['category'];
            $status   = $_POST['status'];



            $duration    = $_POST['duration'];
            $schedule    = $_POST['schedule'];
            $group_size  = $_POST['group_size'];



            $config['upload_path']      = 'upload/events/';
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
                'ev_title_az'          => $title_az,
                'ev_title_en'       => $title_en,
                'ev_title_ru'       => $title_ru,
                'ev_title_tr'       => $title_tr,
                'ev_description_az'    => $descr_az,
                'ev_description_en' => $descr_en,
                'ev_description_ru' => $descr_ru,
                'ev_description_tr' => $descr_tr,
                'ev_date'           => $date,
                'ev_category'       => $category,
                'ev_img'            => $img_name,
                'ev_img_ext'        => $img_ext,
                'ev_status'         => $status,
                'ev_creater_id'     => $_SESSION['admin_id'],
                'ev_creat_date'     => date("Y-m-d H:i:s"),

                'ev_duration'       => $duration,
                'ev_schedule'       => $schedule,
                'ev_group_size'     => $group_size,
            ];

            $data = $this->security->xss_clean($data);

//            print_r('<pre>');
//            print_r($data);
//            die();

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item10_model->add($data);

                redirect(base_url('admin_item_ev_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            $get_all_item_category = $this->item10_model->get_all_item_category();
            $get_all_item_status   = $this->item10_model->get_all_item_status();
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
        $item = $this->item10_model->get_single(
            array("ev_id" => $id)
        );

        $get_all_item_category = $this->item10_model->get_all_item_category();
        $get_all_item_status   = $this->item10_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;

//        $get_all_teachers   = $this->item10_model->get_all_teachers();
//        $viewData->get_all_teachers   = $get_all_teachers;

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

            $date     = $_POST['date'];
            $category = $_POST['category'];
            $status   = $_POST['status'];

            $duration = $_POST['duration'];
            $schedule = $_POST['schedule'];
            $group_size   = $_POST['group_size'];

            $data_id = [
                "ev_id" =>$id,
            ];


            $config['upload_path']      = 'upload/events/';
            $config['allowed_types']    = 'gif|jpg|png|pdf|jpeg';

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')){
                $data     = $this->upload->data('file_name');
                $data_ext = $this->upload->data('file_ext');

                $img_name = $data;
                $img_ext = $data_ext;
            }else{

                $get_current_img = $this->item10_model->get_single(
                    array("ev_id" => $id)
                );

                $img_name = $get_current_img->img;
                $img_ext  = $get_current_img->img_ext;
            }

            $data = [
                'ev_title_az'          => $title_az,
                'ev_title_en'       => $title_en,
                'ev_title_ru'       => $title_ru,
                'ev_title_tr'       => $title_tr,
                'ev_description_az'    => $descr_az,
                'ev_description_en' => $descr_en,
                'ev_description_ru' => $descr_ru,
                'ev_description_tr' => $descr_tr,
                'ev_date'           => $date,
                'ev_category'       => $category,
                'ev_img'            => $img_name,
                'ev_img_ext'        => $img_ext,
                'ev_status'         => $status,
                'ev_updater_id'     => $_SESSION['admin_id'],
                'ev_update_date'    => date("Y-m-d H:i:s"),

                'ev_duration'       => $duration,
                'ev_schedule'       => $schedule,
                'ev_group_size'     => $group_size,
            ];

            $data = $this->security->xss_clean($data);

            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                $this->item10_model->update($data_id, $data);
                redirect(base_url('admin_item_ev_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{
            $viewData = new stdClass();

            // get single item
            $item = $this->item10_model->get_single(
                array("ev_id" => $id)
            );

            $get_all_item_category = $this->item10_model->get_all_item_category();
            $get_all_item_status   = $this->item10_model->get_all_item_status();
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

            $this->item10_model->delete(array("ev_id" => $id,));
            redirect(base_url('admin_item_ev_list'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function detail_form($id){

        $viewData = new stdClass();

        $item = $this->item10_model->get_single(
            array("ev_id" => $id)
        );

        $get_all_item_category = $this->item10_model->get_all_item_category();
        $get_all_item_status   = $this->item10_model->get_all_item_status();
        $viewData->get_all_item_category = $get_all_item_category;
        $viewData->get_all_item_status   = $get_all_item_status;


//        $get_all_teachers   = $this->item10_model->get_all_teachers();
//        $viewData->get_all_teachers   = $get_all_teachers;

        $viewData->programm_list = $this->db->where('n_prog_prog_news_id',$id)->get('item10_events_programm')->result_array();
//        print_r('<pre>');
//        print_r($viewData->programm_list);
//        die();
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

            $this->item10_model->update(array("ev_id" => $post_id,), array("ev_status" => $response['checkbox_val']));

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

//    PROGRAMM ============================================================

    public function createProgramm($id)
    {
        $viewData = new stdClass();

        $viewData->rootFolder = $this->rootFolder;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $viewData->id = $id;


        $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create_programm",$viewData);
    }

    public function createProgramm_act($id){

        $this->form_validation->set_rules("title_az", "TITLE AZ", "required|trim");
        $this->form_validation->set_rules("descr_az", "DESCRIPTION AZ", "required|trim");

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

            $data = [
                'n_prog_prog_news_id' => $id,
                'n_prog_title_az'  => $title_az,
                'n_prog_title_en'  => $title_en,
                'n_prog_title_tr'  => $title_tr,
                'n_prog_title_ru'  => $title_ru,
                'n_prog_descr_az'  => $descr_az,
                'n_prog_descr_en'  => $descr_en,
                'n_prog_descr_tr'  => $descr_tr,
                'n_prog_descr_ru'  => $descr_ru,

                'n_prog_creater_id'=> $_SESSION['admin_id'],
                'n_prog_creat_date'=> date("Y-m-d H:i:s"),

            ];

            $data = $this->security->xss_clean($data);


            if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){


                $this->db->insert('item10_events_programm', $data);

                redirect(base_url('admin_item_ev_list'));

            }else{
                redirect(base_url('admin_login'));
                exit();
            }


        }else{

            $viewData = new stdClass();
            $viewData->id = $id;
            $get_all_item_category = $this->item10_model->get_all_item_category();
            $get_all_item_status   = $this->item10_model->get_all_item_status();
            $viewData->get_all_item_category = $get_all_item_category;
            $viewData->get_all_item_status   = $get_all_item_status;

            $viewData->rootFolder = $this->rootFolder;
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true; //Start form validation variable "set"

            $this->load->view("{$viewData->rootFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/create_programm",$viewData);

        }


    }

    public function deleteProgramm_act($id)
    {
        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){
            $id = $this->security->xss_clean($id);
            $this->db->where('n_prog_id', $id)->delete('item10_events_programm');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            redirect(base_url('admin_login'));
            exit();
        }
    }

}