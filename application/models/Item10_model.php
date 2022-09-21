<?php

class Item10_model extends CI_Model{

    public $tableName = "items10";
    public $categoryTableName = "item_category10";
    public $statusTableName = "item_status";
//    public $courseTableName = "items3";


    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($where = array())
    {
        return $this->db->order_by('ev_id','DESC')
            ->join('item_category10','item_category10.i_c10_id = items10.ev_category')
            ->where($where)->get($this->tableName)->result();
    }

    public function get_single($where = array())
    {
        return $this->db
            ->join('item_category10', 'item_category10.i_c10_id = items10.ev_category','left')
            ->join('item_status', 'item_status.i_s_id = items10.ev_status','left')
//            ->join('items3','items3.t_id = items2.teacher','left')
            ->where($where)->get($this->tableName)->row();
    }

    public function get_all_item_category()
    {
        return $this->db->get($this->categoryTableName)->result();
    }

    public function get_all_item_status()
    {
        return $this->db->get($this->statusTableName)->result();
    }

    public function add($data = array()){
        $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }




////    ===============
//    public function get_all_teachers(){
//        return $this->db->order_by('t_id',"DESC")->get($this->courseTableName)->result();
//    }
////    ===============




}