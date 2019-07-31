<?php
class items extends CI_Model {

    public $title;
    public $content;
    public $date;

    // CREATE
    public function addItem()
    {
        $data = array('name' => $_POST["name"]);
        $this->db->insert('fruit_table', $data);
    }

    // READ (plural)
    public function getItems()
    {
            $query = $this->db->get('fruit_table');
            return $query->result();
    }

    // READ (single)
    public function getItem($id='')
    {
            $query = $this->db->get_where('fruit_table',array('id'=>$id));
            return $query->row_array();
    }

}
