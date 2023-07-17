<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User018 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth018/login');
		if($this->session->userdata('usertype')!='Manager') redirect(base_url());;
		$this->load->model('Users018_model');
	}

    public function index()
	{
		$data['users']=$this->Users018_model->read();
		$this->load->view('users018/user_list_018',$data);
	}

    public function add()
	{
		if($this->input->post('submit')) {
			$this->Users018_model->create();
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>User successfully added !</strong></div>');
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>User add failed !</strong></div>');
			}
			redirect('user018');
		}

		$this->load->view('users018/user_form_018');
	}

    public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->Users018_model->update($id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>User successfully updated !</strong></div>');
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>User update failed !</strong></div>');
			}
			redirect('user018');
		}

		$data['user']=$this->Users018_model->read_by($id);
		$this->load->view('users018/user_form_018',$data);
	}

    public function delete($id)
	{
		$this->Users018_model->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>User successfully deleted !</strong></div>');
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>User delete failed !</strong></div>');
		}
		redirect('user018');
	}

	public function resetpass($id)
    {
		$this->Users018_model->reset($id);
        if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Reset password successfully !</strong></div>');
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Reset password failed !</strong></div>');
		}
		redirect('user018');
    }
}