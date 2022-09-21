<?php 

class Gallery extends CI_Controller{


	public function gallery_list(){
        $data['gallery_list'] = $this->db->get('gallery')->result_array();
		$this->load->view('admin/gallery/gallery-list',$data);
	}

    public function update_gallery($gallery_id){
        $data['gallery_data'] = $this->db->where('gallery_id',$gallery_id)->get('gallery')->row();
        $this->load->view('admin/gallery/gallery-update',$data);
    }

    public function delete_gallery_image($gallery_list_id){
        $this->db->where('gallery_list_id',$gallery_list_id)->delete('gallery_list');
        $this->session->set_flashdata('err','Uğurla silindi');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function add_gallery_image($gallery_id){
        $data['gallery_list'] = $this->db->where('gallery_id',$gallery_id)->get('gallery_list')->result_array();
        $data['gallery_data'] = $this->db->where('gallery_id',$gallery_id)->get('gallery')->row();
        $this->load->view('admin/gallery/gallery-add-image',$data);
    }

    public function add_image($gallery_id){

        $gallery_id = $_POST['gallery_id'];

        $config['upload_path'] = './upload/gallery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 20000;
        $config['max_width'] = 15000;
        $config['max_height'] = 15000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('err','Xəta! Şəkil yüklənmədi');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = $this->upload->data('file_name');

            $image_data = array(
                'gallery_id' => $gallery_id,
                'gallery_image_name' => $data
            );

            $this->db->insert('gallery_list',$image_data);
            $this->session->set_flashdata('err','Uğurla əlavə edildi');
            redirect($_SERVER['HTTP_REFERER']);
            
        }
    }

    public function gallery_create(){
        $this->load->view('admin/gallery/gallery-create');
    }

    public function delete_gallery($gallery_id){

        $this->db->where('gallery_id',$gallery_id)->delete('gallery');
        redirect(base_url('Gallery/gallery_list'));

    }
    
    public function update_gallery_act($gallery_id){

        $title_az = $_POST['title_az'];
        $title_en = $_POST['title_en'];
        $title_ru = $_POST['title_ru'];
        $title_tr = $_POST['title_tr'];

        $gallery_data = array(
            'gallery_name_az' => $title_az,
            'gallery_name_en' => $title_en,
            'gallery_name_ru' => $title_ru,
            'gallery_name_tr' => $title_tr
        );

        $this->db->where('gallery_id',$gallery_id)->update('gallery',$gallery_data);
        redirect(base_url('Gallery/gallery_list'));

    }

    public function add_gallery_act(){

        $title_az = $_POST['title_az'];
        $title_en = $_POST['title_en'];
        $title_ru = $_POST['title_ru'];
        $title_tr = $_POST['title_tr'];

        $gallery_data = array(
            'gallery_name_az' => $title_az,
            'gallery_name_en' => $title_en,
            'gallery_name_ru' => $title_ru,
            'gallery_name_tr' => $title_tr
        );

        $this->db->insert('gallery',$gallery_data);
        redirect(base_url('Gallery/gallery_list'));

    }


}