<?php

class UserController extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('message', 'azerbaijan');
    }

    public function index()
    {
        $data['allCategory'] = $this->db->limit(12)->order_by('i_c_id', 'DESC')->get('item_category')->result_array();
        $data['allCategory_filter'] = $this->db->limit(12)->order_by('i_c_id', 'DESC')->get('item_category')->result_array();

        $data['events'] = $this->db->limit(5)->order_by('ev_id', 'DESC')->where('ev_status', '1')->get('items10')->result_array();

        $data['slider_info'] = $this->db->order_by('sl_id', 'DESC')->where('sl_status', '1')->get('items6')->result_array();

        $data['all_courses'] = $this->db
            ->order_by('c_id', 'DESC')
            //            ->limit(6)
            ->where('status', '1')
            ->join('item_category', 'item_category.i_c_id = items2.category', 'left')
            ->join('items3', 'items3.t_id = items2.teacher', 'left')
            ->join('status', 'status.s_id = items2.status', 'left')
            ->get('items2')->result_array();

        //        print_r('<pre>');
        //        print_r($data['slider_info']);
        //        die();

        $this->load->view('user/index', $data);
    }

    public function sign_in()
    {
        $this->load->view('user/sign-in');
    }

    public function sign_up()
    {
        $this->load->view('user/sign-up');
    }

    public function contact()
    {
        $this->load->view('user/contact');
    }

    public function about()
    {
        $data['about'] = $this->db->where('ab_status', '1')->order_by('ab_id', 'DESC')->get('items4')->row_array();
        $this->load->view('user/about', $data);
    }

    public function gallery()
    {
        $data['gallery_list'] = $this->db
            ->join('item_category5', 'item_category5.i_c5_id = items5.co_category', 'left')
            ->where('co_status', '1')
            ->get('items5')->result_array();
        // print_r('<pre>');
        // print_r($data['gallery_list']);
        // die;
        $this->load->view('user/gallery', $data);
    }

    public function gallery_single($id)
    {

        $id = $this->security->xss_clean($id);



        $data['gallery_single'] = $this->db
            ->where('co_id', $id)
            ->where('co_status', '1')
            ->join('item_category5', 'item_category5.i_c5_id = items5.co_category', 'left')
            ->get('items5')->row_array();

        $data['gallery'] = $this->db
            ->where('gl_id_main', $id)
            ->get('gallery_list')->result_array();


        if (empty($data['gallery_single']) || !is_numeric($id)) {
            redirect(base_url('index'));
        }

        $this->load->view('user/gallery_single', $data);
    }

    public function error404()
    {
        $this->load->view('user/error');
    }

    public function blog()
    {
        $this->load->view('user/blog');
    }

    public function blog_single($id)
    {
        $this->load->view('user/blog-details');
    }

    public function category_list()
    {
        $data['allCategory'] = $this->db->order_by('i_c_id', 'DESC')->get('item_category')->result_array();
        $this->load->view('user/category_list', $data);
    }

    public function category($id)
    {
        $data['category'] = $this->db
            ->order_by('c_id', 'DESC')
            ->where('category', $id)
            ->join('item_category', 'item_category.i_c_id = items2.category', 'left')
            ->join('items3', 'items3.t_id = items2.teacher', 'left')
            ->join('status', 'status.s_id = items2.status', 'left')
            ->get('items2')->result_array();


            if (!is_numeric($id)) {
                redirect(base_url('index'));
            }

        $this->load->view('user/category', $data);
    }

    public function courses()
    {
        $data['all_courses'] = $this->db
            ->order_by('c_id', 'DESC')
            ->where('status', '1')
            ->join('item_category', 'item_category.i_c_id = items2.category', 'left')
            ->join('items3', 'items3.t_id = items2.teacher', 'left')
            ->join('status', 'status.s_id = items2.status', 'left')
            ->get('items2')->result_array();

        $this->load->view('user/course-grid', $data);
    }

    public function course_single($id)
    {
        $data['single_course'] = $this->db
            ->where('c_id', $id)
            ->where('status', '1')
            ->join('item7_course_programm', 'item7_course_programm.prog_course_id = items2.c_id', 'left')
            ->join('item_category', 'item_category.i_c_id = items2.category', 'left')
            ->join('items3', 'items3.t_id = items2.teacher', 'left')
            ->get('items2')->row_array();

        $data['all_courses_same_category_courses'] = $this->db
            ->order_by('c_id', 'DESC')
            ->where_not_in('c_id', $id)
            ->where('category', $data['single_course']['category'])
            ->join('item_category', 'item_category.i_c_id = items2.category', 'left')
            ->join('items3', 'items3.t_id = items2.teacher', 'left')
            ->get('items2')->result_array();

        $data['all_courses'] = $this->db
            ->order_by('c_id', 'DESC')
            ->where_not_in('c_id', $id)
            ->join('item_category', 'item_category.i_c_id = items2.category', 'left')
            ->join('items3', 'items3.t_id = items2.teacher', 'left')
            ->join('status', 'status.s_id = items2.status', 'left')
            ->get('items2')->result_array();

        $data['programs'] = $this->db
            ->where('prog_course_id', $id)
            ->join('items2', 'items2.c_id = item7_course_programm.prog_course_id', 'left')
            ->get('item7_course_programm')->result_array();

        $data['teachers'] = $this->db->order_by('t_id', 'DESC')->where('t_status', '1')->limit(4)->get('items3')->result_array();

        if (empty($data['single_course']) || empty($data['teachers']) || !is_numeric($id)) {
            redirect(base_url('index'));
        }



        $this->load->view('user/course-details', $data);
    }

    public function instructor()
    {
        $data['all_teachers'] = $this->db->order_by('t_id', 'DESC')->where('t_status', '1')->get('items3')->result_array();
        $this->load->view('user/instructor', $data);
    }

    public function instructor_single($id)
    {
        $data['single_teacher'] = $this->db->where('t_id', $id)->where('t_status', '1')->get('items3')->row_array();

        $data['all_courses'] = $this->db
            ->where('t_id', $id)
            ->where('t_status', '1')
            ->order_by('c_id', 'DESC')
            ->where_not_in('c_id', $id)
            ->join('item_category', 'item_category.i_c_id = items2.category', 'left')
            ->join('items3', 'items3.t_id = items2.teacher', 'left')
            ->join('status', 'status.s_id = items2.status', 'left')
            ->get('items2')->result_array();
        //        print_r("<pre>");
        //        print_r($data['all_courses']);
        //        die();

        $this->load->view('user/instructor-details', $data);
    }


    public function events()
    {
        $data['events_all'] = $this->db
            ->limit(6)
            ->where('ev_status', '1')
            ->order_by('ev_id', 'DESC')
            ->join('item_category10', 'item_category10.i_c10_id = items10.ev_category', 'left')
            ->get('items10')->result_array();

        $this->load->view('user/events', $data);
    }

    public function events_single($id)
    {
        $data['events_single'] = $this->db
            ->join('item_category10', 'item_category10.i_c10_id = items10.ev_category', 'left')
            ->where('ev_id', $id)
            ->where('ev_status', '1')
            ->get('items10')->row_array();

        $data['events_all'] = $this->db
            ->limit(6)
            ->where('ev_status', '1')
            ->order_by('ev_id', 'DESC')
            ->where_not_in('ev_id', $id)
            ->join('item_category10', 'item_category10.i_c10_id = items10.ev_category', 'left')
            ->get('items10')->result_array();

        $data['programs'] = $this->db
            ->select("n_prog_title_az,n_prog_title_en,n_prog_title_tr,n_prog_title_ru,n_prog_descr_az,n_prog_descr_en,n_prog_descr_tr,n_prog_descr_ru")
            ->where('n_prog_prog_news_id', $id)
            ->join('items10', 'items10.ev_id = item10_events_programm.n_prog_prog_news_id', 'left')
            ->get('item10_events_programm')->result_array();

        $this->load->view('user/event-details', $data);
    }


    // ============================================================
    

    public function subscribe(){

		$subscribe = $_POST['e_mail'];
		$subscribe = $this->security->xss_clean($subscribe);

		if(!empty($subscribe)){

			$check_subscribe = $this->db->where('sub_email', $subscribe)->get('subscribe')->row_array();
			
			if($check_subscribe){

				$this->session->set_flashdata('err_email', 'Siz artıq yeniliklərimizə abunə olmusunuz. Təşəkkür edirik.');
				redirect($_SERVER['HTTP_REFERER']);

			}else{

				$data = [
					'sub_email' => $subscribe, 			
					'sub_date'  => date("Y-m-d H:i:s"), 			
				];
	
				$data = $this->security->xss_clean($data);
	
				$this->db->insert('subscribe', $data);
	
				$this->session->set_flashdata('success_email', 'Təbriklər! Siz, uğurla abunə oldunuz. Təşəkkür edirik.');
				redirect($_SERVER['HTTP_REFERER']);
			}

		}else{
			$this->session->set_flashdata('err_email_err', 'Diqqət! Boşluq buraxmayın!');
			redirect($_SERVER['HTTP_REFERER']);
		}

	}



}
