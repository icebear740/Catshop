<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cate018 extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            if(! $this->session->userdata('username')) redirect(base_url());
            $this->load->model('cate018_model');
    }
	public function index()
	{
        $data['categories018']=$this->cate018_model->read();
        $this->load->view('cate/cate_list_018', $data);
    }

    public function add()
    {
        if($this->input->post('submit')){
            $this->cate018_model->create();
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg','<h6 style=color:green>Cat successfully added !</h6>');
            }else{
                $this->session->set_flashdata('msg','<h6 style=color:red>Cat unsuccessfully added !</h6>');
            }
            redirect('cate018');
        }
        $this->load->view('cate/cate_form_018');
    }

    public function edit($id)
    {
        if($this->input->post('submit')){
            $this->cate018_model->update($id);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg','<h6 style=color:green>Cat successfully update !</h6>');
            }else{
                $this->session->set_flashdata('msg','<h6 style=color:red>Cat unsuccessfully update !</h6>');
            }
            redirect('cate018');
        }
        $data['cate']=$this->cate018_model->read_by($id);
        $this->load->view('cate/cate_form_018',$data);
    }
    public function delete($id)
    {
        $this->cate018_model->delete($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('msg','<h6 style=color:green>Cat successfully delete !<h6>');
        }else{
            $this->session->set_flashdata('msg','<h6 style=color:red>Cat unsuccessfully delete !<h6>');
        }
        redirect('cate018');
    }
}