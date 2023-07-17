<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users018_model extends CI_Model {

    public function create()
    {
        $data = array (
            'username_018' => $this->input->post('username_018'),
            'usertype_018' => $this->input->post('usertype_018'),
            'fullname_018' => $this->input->post('fullname_018'),
            'password_018' => password_hash($this->input->post('usertype_018'), PASSWORD_DEFAULT)
        );
        $this->db->insert('users018',$data);
    }

    public function read()
	{
		$query=$this->db->get('users018');
        return $query->result();
	}

    public function read_by($userid)
	{
        $this->db->where('userid_018',$userid);
		$query=$this->db->get('users018');
        return $query->row();
	}

    public function update($id)
    {
        $data = array (
            'username_018' => $this->input->post('username_018'),
            'usertype_018' => $this->input->post('usertype_018'),
            'fullname_018' => $this->input->post('fullname_018')
        );
        $this->db->where('userid_018',$id);
        $this->db->update('users018',$data);
    }

    public function delete($id)
    {
        $this->db->where('userid_018',$id);
        $this->db->delete('users018');
    }

    public function reset($id)
    {
        $this->db->set('password_018', password_hash($this->db->where('userid_018',$id)->get('users018')->row('usertype_018'), PASSWORD_DEFAULT));
        $this->db->where('userid_018', $id);
        return $this->db->update('users018');
    }
}