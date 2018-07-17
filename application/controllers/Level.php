<?php
class Level extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('level_model');
	}

	public function index()
	{
		$data['page_title'] = 'List level';
		$data['levels'] = $this->level_model->get_all();

		$this->load->view('templates/header');
		$this->load->view('level/level_view', $data);
		$this->load->view('templates/footer');
	}
	public function create()
	{
		$data['page_title'] = 'Tambah Level';
		$this->form_validation->set_rules('level', 'level', 'required');
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('level/level_create', $data);
			$this->load->view('templates/footer');
		} else {
			$post_data = array(
				'level' => $this->input->post('level'),
			);
			$this->level_model->create($post_data);
			$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');
			redirect('level');
		}
	}
	public function delete($id)
	{
		$this->level_model->delete($id);
		redirect('level','refresh');
	}
}
?>