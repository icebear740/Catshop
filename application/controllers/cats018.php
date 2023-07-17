<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cats018 extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            if(! $this->session->userdata('username')) redirect(base_url);
            $this->load->model('cats018_model');
            $this->load->model('cate018_model');
            $this->load->library('form_validation');
    }
	public function index()
	{
        $this->load->library('pagination');

        $config['base_url'] = site_url('cats018/index');
        $config['total_rows'] = $this->db->count_all('cats018');
        $config['per_page'] = 5;

        $config['full_tag_open']='<div class="pagination">';
        $config['full_tag_close']='</div>';

        $this->pagination->initialize($config);

        $limit=$config['per_page'];

        $start=$this->uri->segment(3)?$this->uri->segment(3):0;
        $data['i']=$start+1;
        
        $data['cats']=$this->cats018_model->read($limit, $start);
        $this->load->view('cats/cat_list', $data);
    }

    public function add()
    {
        if($this->input->post('submit')){
            $this->cats018_model->create();
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
              </div>');
            }else{
                $this->session->set_flashdata('msg','<h6 style=color:red>Cat unsuccessfully added !</h6>');
            }
            redirect('cats018');
        }
        $data['category']=$this->cate018_model->read();
        $this->load->view('cats/cat_form', $data);
    }

    public function edit($id)
    {
        if($this->input->post('submit')){
            $this->cats018_model->update($id);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg','<h6 style=color:green>Cat successfully update !</h6>');
            }else{
                $this->session->set_flashdata('msg','<h6 style=color:red>Cat unsuccessfully update !</h6>');
            }
            redirect('cats018');
        }
        $data['category']=$this->cate018_model->read();
        $data['cat']=$this->cats018_model->read_by($id);
        $this->load->view('cats/cat_form',$data);
    }
    public function delete($id)
    {
        $this->cats018_model->delete($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('msg','<h6 style=color:green>Cat successfully delete !<h6>');
        }else{
            $this->session->set_flashdata('msg','<h6 style=color:red>Cat unsuccessfully delete !<h6>');
        }
        redirect('cats018');
    }
    
    public function sale($id)
    {
        if($this->input->post('submit')){
            $this->cats018_model->sale($id);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg','<h6 style=color:green>Cat successfully Sold !</h6>');
            }else{
                $this->session->set_flashdata('msg','<h6 style=color:red>Cat unsuccessfully sold !</h6>');
            }
            redirect('cats018');
        }
        $data['cat']=$this->cats018_model->read_by($id);
        $this->load->view('cats/cat_sale_018',$data);
    }

    public function changephoto($id)
    {
        $data['error']='';
        if($this->input->post('upload')){
            if($this->upload()){
            $this->cats018_model->changephoto($this->upload->data('file_name'), $id);
            // $this->session->set_userdata('photo',$this->upload->data('file_name'));
            $this->session->set_flashdata('msg', '<p class="alert alert-success">Photo successfuly changed !</p>');
        }else $data['error']=$this->upload->display_errors();
        } 
        $data['cat'] = $this->cats018_model->read_by($id);
        $this->load->view('cats/cat_photo_018', $data);

    }
    public function upload()
    {
            $config['upload_path']          = './uploads/cats';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            return $this->upload->do_upload('photo');
    }

    public function sales()
	{
        $data['sales']=$this->cats018_model->sales();
        $this->load->view('cats/sale_list_018', $data);
    }
}