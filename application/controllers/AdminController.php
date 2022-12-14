<?php 

class AdminController extends CI_Controller{


	public function index(){
        unset(
            $_SESSION['admin_id'],
            $_SESSION['admin_status'],
            $_SESSION['admin_category']
        );
		$this->load->view('admin/loginPage');
	}

	public function loginAct(){
		
		$username = $this->input->post ('username');
		$password = $this->input->post ('password');

		if(!empty($username) && !empty($password)){

			$data = [
				'a_username' => $username,
				'a_password' => md5($password."seba"),
                'a_status' => '1',
			];
            $data = $this->security->xss_clean($data);

			$result = $this->db->where($data)->get('admin')->row_array();
			
			if($result){

				$_SESSION['admin_id']       = $result['a_id'];
				$_SESSION['admin_status']   = $result['a_status'];
				$_SESSION['admin_category'] = $result['a_category'];

				redirect(base_url('admin_item_list'));

			} else{
				$this->session->set_flashdata('err','Username ve ya password yanlisdir!');
				redirect(base_url('admin_login'));
			}

		} else{
			$this->session->set_flashdata('err','Bosluq buraxmayin!');
			redirect(base_url('admin_login'));
		}
	}

	public function logout(){

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            unset(
                $_SESSION['admin_id'],
                $_SESSION['admin_status'],
                $_SESSION['admin_category']
            );
            redirect(base_url('admin_login'));

        }else{
            redirect(base_url('admin_login'));
            exit();
        }


	}


	public function dashboard(){

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $data['admin_list'] = $this->db->order_by('a_id','DESC')
                ->join('status','status.s_id = admin.a_status','left')
                ->join('admincategory','admincategory.a_c_id = admin.a_category','left')
                ->get('admin')->result_array();
            $this->load->view('admin/index',$data);

        }else{
            redirect(base_url('admin_login'));
            exit();
        }


	}

	public function delete_admin($id){


        //check delete only for admin START

        $adminId = $this->db->where('a_id',$_SESSION['admin_id'])->get('admin')->row_array();

        $admin_category = $adminId['a_category'];
        $admin_status   = $adminId['a_status'];

        if($admin_category != '1' || $admin_status != '1'){
            $this->session->set_flashdata('err','Bu ??m??liyyat?? ??????n icaz??niz yoxdur!');
            redirect(base_url('admin_login'));
            exit();
        }
        //check delete only for admin END

	    $adminCount = $this->db->count_all('admin');

	    if($adminCount == 1){
            $this->session->set_flashdata('err', 'Diqq??t! Sistemd?? minimum 1 admin qalmal??d??r!');
            redirect($_SERVER['HTTP_REFERER']);
        }else{

	        if($_SESSION['admin_id'] == $id){

                $this->session->set_flashdata('err', 'Diqq??t! ??z??n??z?? sistemd??n sil?? bilm??zsiniz!');
                redirect($_SERVER['HTTP_REFERER']);

            }else{

                if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

                    $this->db->where('a_id', $id)->delete('admin');
                    $this->session->set_flashdata('success', 'T??brikl??r! Admin u??urla silindi!');
                    redirect($_SERVER['HTTP_REFERER']);

                }else{
                    redirect(base_url('admin_login'));
                    exit();
                }



            }

        }

    }

	public function creatAdmin(){

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $data['admin_category'] = $this->db->get('admincategory')->result_array();
            $data['admin_status'] = $this->db->get('status')->result_array();

            $this->load->view('admin/creatAdmin',$data);

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function creatAdminAct(){
	    $name       = $_POST['name'];
	    $username   = $_POST['username'];
	    $password   = $_POST['password'];
	    $category   = $_POST['category'];
	    $status     = $_POST['status'];
	    $email      = $_POST['email'];


        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){


            if(!empty($name) && !empty($username) && !empty($password) && !empty($category) && !empty($status) && !empty($email)){

                $config['upload_path']          = './upload/admin/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
//            $config['max_size']             = 100;
//            $config['max_width']            = 1024;
//            $config['max_height']           = 768;

                $this->upload->initialize($config);

                if($this->upload->do_upload('user_file')) {
                    $admin_img = $this->upload->data('file_name');


                    $category = $this->db->where('a_c_id',$category)->get('admincategory')->row_array();
                    if($category){

                        $status = $this->db->where('s_id',$status)->get('status')->row_array();
                        if($status){

                            $data = [
                                'a_name'        => $name,
                                'a_username'    => $username,
                                'a_password'    => md5($password."seba"),
                                'a_category'    => $category['a_c_id'],
                                'a_status'      => $status['s_id'],
                                'a_email'       => $email,
                                'a_img'         => $admin_img,
                                'a_creater_id'  => $_SESSION['admin_id'],
                                'a_creat_date'  => date("Y-m-d H:i:s"),
                            ];
                            $data = $this->security->xss_clean($data);

                            $this->db->insert('admin', $data);
                            $this->session->set_flashdata('success', 'T??brikl??r! Admin u??urla ??lav?? olundu!');
                            redirect(base_url('admin_dashboard'));

                        }else{
                            $this->session->set_flashdata('err', 'Diqq??t! Yaln???? m??lumat daxil edilib!');
                            redirect($_SERVER['HTTP_REFERER']);
                        }

                    }else{
                        $this->session->set_flashdata('err', 'Diqq??t! Yaln???? m??lumat daxil edilib!');
                        redirect($_SERVER['HTTP_REFERER']);
                    }

                }else{

                    $category = $this->db->where('a_c_id',$category)->get('admincategory')->row_array();
                    if($category){

                        $status = $this->db->where('s_id',$status)->get('status')->row_array();
                        if($status){

                            $data = [
                                'a_name'        => $name,
                                'a_username'    => $username,
                                'a_password'    => md5($password."seba"),
                                'a_category'    => $category['a_c_id'],
                                'a_status'      => $status['s_id'],
                                'a_email'       => $email,
                                'a_creater_id'  => $_SESSION['admin_id'],
                                'a_creat_date'  => date("Y-m-d H:i:s"),
                            ];
                            $data = $this->security->xss_clean($data);

                            $this->db->insert('admin', $data);
                            $this->session->set_flashdata('success', 'T??brikl??r! Admin u??urla ??lav?? olundu!');
                            redirect(base_url('admin_dashboard'));

                        }else{
                            $this->session->set_flashdata('err', 'Diqq??t! Yaln???? m??lumat daxil edilib!');
                            redirect($_SERVER['HTTP_REFERER']);
                        }

                    }else{
                        $this->session->set_flashdata('err', 'Diqq??t! Yaln???? m??lumat daxil edilib!');
                        redirect($_SERVER['HTTP_REFERER']);
                    }

                }

            }else{
                $this->session->set_flashdata('err', 'Diqq??t! Bo??luq buraxmay??n!');
                redirect($_SERVER['HTTP_REFERER']);
            }


        }else{
            redirect(base_url('admin_login'));
            exit();
        }


    }

    public function updateAdmin($id){


        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            //check delete only for admin START
            $data['admin_info'] = $this->db->where('a_id',$id)->get('admin')->row_array();

            if($data['admin_info']){

                $adminId = $this->db->where('a_id',$_SESSION['admin_id'])->get('admin')->row_array();

                $admin_category = $adminId['a_category'];
                $admin_status   = $adminId['a_status'];

                if($adminId['a_id'] != $data['admin_info']['a_id'] && $admin_category != '1' || $admin_status != '1'){
                    $this->session->set_flashdata('err','Bu ??m??liyyat?? ??????n icaz??niz yoxdur!');
                    redirect(base_url('admin_login'));
                    exit();
                }
                //check delete only for admin END

                $data['admin_category'] = $this->db->get('admincategory')->result_array();
                $data['admin_status'] = $this->db->get('status')->result_array();
                // $data['admin_info'] = $this->db->where('a_id',$id)->get('admin')->row_array();

                $this->load->view('admin/editAdmin',$data);

            }else{
                $this->session->set_flashdata('err', 'Diqq??t! M??lumat tap??lmad??!');
                redirect(base_url('admin_login'));
                exit();
            }



        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function updateAdminAct($id){

        $name       = $_POST['name'];
        $username   = $_POST['username'];
        $category   = $_POST['category'];
        $status     = $_POST['status'];
        $email      = $_POST['email'];

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            if(!empty($name) && !empty($username) && !empty($email)){

                $config['upload_path'] = './upload/admin/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
//            $config['max_size']             = 100;
//            $config['max_width']            = 1024;
//            $config['max_height']           = 768;

                $this->upload->initialize($config);

                if ($this->upload->do_upload('user_file')) {
                    $admin_img = $this->upload->data('file_name');

                    $admin_cate_result = $this->db->select('a_id,a_category,a_status')->where('a_id',$_SESSION['admin_id'])->get('admin')->row_array();

                    if ($admin_cate_result['a_category'] == '1') {
                        if (empty($category) && empty($status)) {
                            $this->session->set_flashdata('err', 'Diqq??t! Bo??luq buraxmay??n!');
                            redirect($_SERVER['HTTP_REFERER']);
                        } else {
                            $category = $this->db->where('a_c_id', $category)->get('admincategory')->row_array();
                            if ($category) {

                                $status = $this->db->where('s_id', $status)->get('status')->row_array();
                                if ($status) {



                                    if($category['a_c_id'] == '1'){

                                        $data = [
                                            'a_name' => $name,
                                            'a_username' => $username,
                                            'a_category' => $category['a_c_id'],
                                            'a_status' => $status['s_id'],
                                            'a_email' => $email,
                                            'a_img' => $admin_img,
                                            'a_updater_id' => $_SESSION['admin_id'],
                                            'a_update_date' => date("Y-m-d H:i:s"),
                                        ];
                                        $data = $this->security->xss_clean($data);

                                        $this->db->where('a_id', $id)->update('admin', $data);
                                        $this->session->set_flashdata('success', 'T??brikl??r! Admin m??lumat?? u??urla yenil??ndi!');
//                                        redirect(base_url('admin_dashboard'));
                                        redirect($_SERVER['HTTP_REFERER']);

                                    }else{
//                                        $adminCateCount = $this->db->where(['a_category' => '1'])->count_all_results("admin");
//
//                                        if($adminCateCount == '1') {
//                                            $this->session->set_flashdata('err', 'Diqq??t! Sonuncu adminin kateqoriyas??n?? d??yi??m??k t??hl??k??sizlik bax??m??ndan m??mk??n deyil! Adminliyinizi ba??qas??na ver?? bil??rsiniz.');
//                                            redirect($_SERVER['HTTP_REFERER']);
//                                        }else{

                                            $data = [
                                                'a_name' => $name,
                                                'a_username' => $username,
                                                'a_category' => $category['a_c_id'],
                                                'a_status' => $status['s_id'],
                                                'a_email' => $email,
                                                'a_img' => $admin_img,
                                                'a_updater_id' => $_SESSION['admin_id'],
                                                'a_update_date' => date("Y-m-d H:i:s"),
                                            ];
                                            $data = $this->security->xss_clean($data);

                                            $this->db->where('a_id', $id)->update('admin', $data);
                                            $this->session->set_flashdata('success', 'T??brikl??r! Admin m??lumat?? u??urla yenil??ndi!');
//                                            redirect(base_url('admin_dashboard'));
                                            redirect($_SERVER['HTTP_REFERER']);

//                                        }
                                    }



                                } else {
                                    $this->session->set_flashdata('err', 'Diqq??t! Yaln???? m??lumat daxil edilib!');
                                    redirect($_SERVER['HTTP_REFERER']);
                                }

                            } else {
                                $this->session->set_flashdata('err', 'Diqq??t! Yaln???? m??lumat daxil edilib!');
                                redirect($_SERVER['HTTP_REFERER']);
                            }
                        }

                    } else {

                        $data = [
                            'a_name' => $name,
                            'a_username' => $username,
//                        'a_category'    => $category['a_c_id'],
//                        'a_status'      => $status['s_id'],
                            'a_email' => $email,
                            'a_img' => $admin_img,
                            'a_updater_id' => $_SESSION['admin_id'],
                            'a_update_date' => date("Y-m-d H:i:s"),
                        ];
                        $data = $this->security->xss_clean($data);

                        $this->db->where('a_id', $id)->update('admin', $data);
                        $this->session->set_flashdata('success', 'T??brikl??r! Admin m??lumat?? u??urla yenil??ndi!');
//                        redirect(base_url('admin_dashboard'));
                        redirect($_SERVER['HTTP_REFERER']);

                    }


                } else {
                    $admin_cate_result = $this->db->select('a_id,a_category,a_status')->where('a_id',$_SESSION['admin_id'])->get('admin')->row_array();
                    if ($admin_cate_result['a_category'] == '1') {
                        if (empty($category) && empty($status)) {
                            $this->session->set_flashdata('err', 'Diqq??t! Bo??luq buraxmay??n!');
                            redirect($_SERVER['HTTP_REFERER']);
                        } else {
                            $category = $this->db->where('a_c_id', $category)->get('admincategory')->row_array();
                            if ($category) {

                                $status = $this->db->where('s_id', $status)->get('status')->row_array();
                                if ($status) {

                                    if($category['a_c_id'] == '1'){
                                        $data = [
                                            'a_name' => $name,
                                            'a_username' => $username,
                                            'a_category' => $category['a_c_id'],
                                            'a_status' => $status['s_id'],
                                            'a_email' => $email,
                                            // 'a_img'         => $admin_img,
                                            'a_updater_id' => $_SESSION['admin_id'],
                                            'a_update_date' => date("Y-m-d H:i:s"),
                                        ];
                                        $data = $this->security->xss_clean($data);

                                        $this->db->where('a_id', $id)->update('admin', $data);
                                        $this->session->set_flashdata('success', 'T??brikl??r! Admin m??lumat?? u??urla yenil??ndi!');
//                                        redirect(base_url('admin_dashboard'));
                                        redirect($_SERVER['HTTP_REFERER']);

                                    }else{

//                                        $adminCateCount = $this->db->where(['a_category' => '1'])->count_all_results("admin");
//                                        print_r($adminCateCount);
//                                        die();
//                                        if($adminCateCount == '1') {
//                                            $this->session->set_flashdata('err', 'Diqq??t! Sonuncu adminin kateqoriyas??n?? d??yi??m??k t??hl??k??sizlik bax??m??ndan m??mk??n deyil! Adminliyinizi ba??qas??na ver?? bil??rsiniz.');
//                                            redirect($_SERVER['HTTP_REFERER']);
//                                        }else {

                                            $data = [
                                                'a_name' => $name,
                                                'a_username' => $username,
                                                'a_category' => $category['a_c_id'],
                                                'a_status' => $status['s_id'],
                                                'a_email' => $email,
                                                // 'a_img'         => $admin_img,
                                                'a_updater_id' => $_SESSION['admin_id'],
                                                'a_update_date' => date("Y-m-d H:i:s"),
                                            ];
                                            $data = $this->security->xss_clean($data);

                                            $this->db->where('a_id', $id)->update('admin', $data);
                                            $this->session->set_flashdata('success', 'T??brikl??r! Admin m??lumat?? u??urla yenil??ndi!');
//                                            redirect(base_url('admin_dashboard'));
                                            redirect($_SERVER['HTTP_REFERER']);

//                                        }

                                    }


                                } else {
                                    $this->session->set_flashdata('err', 'Diqq??t! Yaln???? m??lumat daxil edilib!');
                                    redirect($_SERVER['HTTP_REFERER']);
                                }

                            } else {
                                $this->session->set_flashdata('err', 'Diqq??t! Yaln???? m??lumat daxil edilib!');
                                redirect($_SERVER['HTTP_REFERER']);
                            }
                        }

                    } else {
                        $data = [
                            'a_name' => $name,
                            'a_username' => $username,
//                        'a_category'    => $category['a_c_id'],
//                        'a_status'      => $status['s_id'],
                            'a_email' => $email,
//                        'a_img'         => $admin_img,
                            'a_updater_id' => $_SESSION['admin_id'],
                            'a_update_date' => date("Y-m-d H:i:s"),
                        ];
                        $data = $this->security->xss_clean($data);

                        $this->db->where('a_id', $id)->update('admin', $data);
                        $this->session->set_flashdata('success', 'T??brikl??r! Admin m??lumat?? u??urla yenil??ndi!');
//                        redirect(base_url('admin_dashboard'));
                        redirect($_SERVER['HTTP_REFERER']);

                    }

                }


            }else{
                $this->session->set_flashdata('err', 'Diqq??t! Bo??luq buraxmay??n!');
                redirect($_SERVER['HTTP_REFERER']);
            }

        }else{
            redirect(base_url('admin_login'));
            exit();
        }




    }

    public function removeAdminIMg($id)
    {

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $data['admin_info'] = $this->db->select('a_img')->where('a_id',$id)->get('admin')->row_array();

            if($data['admin_info']['a_img']){

                $data = [
                    'a_img' => '',
                ];
                $data = $this->security->xss_clean($data);

                $this->db->where('a_id',$id)->update('admin', $data);
                $this->session->set_flashdata('success', 'T??brikl??r! ????kil u??urla silindi!');
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                $this->session->set_flashdata('err', 'Diqq??t! Silm??k ??????n ????kil tap??lmad??!');
                redirect($_SERVER['HTTP_REFERER']);
            }

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }

    public function change_password($id)
    {

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $data['admin_info'] = $this->db->select('a_id,a_password,a_category,a_status,a_email')->where('a_id',$id)->get('admin')->row_array();

            $this->load->view('admin/admin_change_password',$data);

        }else{
            redirect(base_url('admin_login'));
            exit();
        }

    }
    
    public function change_passwordAct($id){
        $current_password   = $_POST['current_password'];
        $password           = $_POST['password'];
        $r_password         = $_POST['r_password'];

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            if(!empty($current_password) && !empty($password) && !empty($r_password)){

                $oldPass = $this->db->select('a_id,a_password,a_category,a_status,a_email')->where('a_password',md5($current_password."seba"))->get('admin')->row_array();

                if($oldPass['a_password']){

                    if($password == $r_password){
                        $n_pass = md5($password."seba");
                        $c_pass = $oldPass['a_password'];
                        if($n_pass == $c_pass){
                            $this->session->set_flashdata('err', 'Diqq??t! Yeni ??ifr??ni m??vcud ??ifr?? il?? eyni daxil etm??yin! F??rqli yeni ??ifr?? daxil edin.');
                            redirect($_SERVER['HTTP_REFERER']);
                        }else{
                            $data = [
                                'a_password' => $n_pass,
                            ];
                            $data = $this->security->xss_clean($data);

                            $this->db->where('a_id',$id)->update('admin', $data);
                            $this->session->set_flashdata('success', 'T??brikl??r! ??ifr?? u??urla yenil??ndi!');
                            redirect(base_url('admin_dashboard'));
                        }

                    }else{
                        $this->session->set_flashdata('err', 'Diqq??t! Yeni ??ifr??ni d??zg??n formada iki d??f?? t??krar daxil edin.');
                        redirect($_SERVER['HTTP_REFERER']);
                    }

                }else{
                    $this->session->set_flashdata('err', 'Diqq??t! M??vcud ??ifr?? yaln????d??r.');
                    redirect($_SERVER['HTTP_REFERER']);
                }

            }else{
                $this->session->set_flashdata('err', 'Diqq??t! Bo??luq buraxmay??n!');
                redirect($_SERVER['HTTP_REFERER']);
            }

        }else{
            redirect(base_url('admin_login'));
            exit();
        }




    }

    public function change_password_reset($id){

        if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_status']) && isset($_SESSION['admin_category'])){

            $data['admin_info'] = $this->db->select('a_id,a_password,a_category,a_status,a_email')->where('a_id',$id)->get('admin')->row_array();
            $this->load->view('admin/admin_password_reset',$data);

        }else{
            redirect(base_url('admin_login'));
            exit();
        }


    }

    public function change_password_resetAct($id){
        echo 'Maile getsin random sifre';
    }

    // Maile getsin random sifre




















}