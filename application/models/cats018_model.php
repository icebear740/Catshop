<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cats018_model extends CI_Model {

	public function create()
	{
        $data = array(
            'name_018' => $this->input->post('name_018'),
            'type_018' => $this->input->post('type_018'),
            'gender_018' => $this->input->post('gender_018'),
            'age_018' => $this->input->post('age_018'),
            'price_018' => $this->input->post('price_018'),
        );
        $this->db->insert('cats018', $data);
    }

    public function read($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query=$this->db->get('cats018');
        return $query->result();
    }
    
    public function read_by($id)
    {
        $this->db->where('id_018',$id);
        $query=$this->db->get('cats018');
        return $query->row();
    }
    public function update($id)
    {
        $data = array(
            'name_018' => $this->input->post('name_018'),
            'type_018' => $this->input->post('type_018'),
            'gender_018' => $this->input->post('gender_018'),
            'age_018' => $this->input->post('age_018'),
            'price_018' => $this->input->post('price_018'),
        );
        $this->db->where('id_018',$id);       
        $this->db->update('cats018',$data);       
    }

    public function delete($id)
    {
        $this->db->where('id_018',$id);       
        $this->db->delete('cats018');
    }
    
    public function validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name_018','cat name', 'required');
        $this->form_validation->set_rules('type_018','cat type', 'required');
        $this->form_validation->set_rules('gender_018','cat gender', 'required|numeric');
        $this->form_validation->set_rules('price_018','cat price', 'required|numeric');
        if($this->form_validation->run())
        return TRUE;
        else
        return FALSE;

    }

    public function sale($id)
    {
        $data = array(
            'costumer_name_018' => $this->input->post('costumer_name_018'),
            'costumer_address_018' => $this->input->post('costumer_address_018'),
            'costumer_phone_018' => $this->input->post('costumer_phone_018'),
            'cat_id_018'=> $id
        );
        $this->db->insert('catsales018', $data);
        $this->db->set('sold_018','1');
        $this->db->where('id_018',$id);       
        $this->db->update('cats018',$sold);

    }

    public function changephoto($file, $id)
    {
        $this->db->select('photo_cats_018');
        $this->db->from('cats018');
        $this->db->where('id_018',$id);

        $query = $this->db->get();
        $photo = $query->row()->photo_cats_018;

        if($photo != 'default.png')
        unlink('./uploads/cats/' . $this->session->userdata('photo'));

        $this->db->set('photo_cats_018', $file);
        $this->db->where('id_018',$id);
        return $this->db->update('cats018');
    }

    public function sales()
    {
        $this->db->select('*');
        $this->db->from('catsales018');
        $this->db->join('cats018','catsales018.cat_id_018 = cats018.id_018');
        $query=$this->db->get();

        //$query=$this->db->get('catsales018');
        return $query->result();
    }
    
}
