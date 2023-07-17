<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cate018_model extends CI_Model {

	public function create()
	{
        $data = array(
            'cate_name_018' => $this->input->post('cate_name_018'),
            'description_018' => $this->input->post('description_018'),
        );
        $this->db->insert('categories018', $data);
    }

    public function read()
    {
        $query=$this->db->get('categories018');
        return $query->result();
    }
    
    public function read_by($id)
    {
        $this->db->where('cate_id_018',$id);
        $query=$this->db->get('categories018');
        return $query->row();
    }
    public function update($id)
    {
        $data = array(
            'cate_name_018' => $this->input->post('cate_name_018'),
            'description_018' => $this->input->post('description_018'),
        );
        $this->db->where('cate_id_018',$id);       
        $this->db->update('categories018',$data);       
    }

    public function delete($id)
    {
        $this->db->where('cate_id_018',$id);       
        $this->db->delete('categories018');
    }
}
