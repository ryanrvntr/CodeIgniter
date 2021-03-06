<?php
class User extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('user_model');
    $this->load->model('level_model');
  }
  public function register()
  {
    $data['page_title'] = 'Registrasi User';
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
    $this->form_validation->set_rules('kodepos', 'Kodepos', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');
    if($this->form_validation->run() === FALSE){
      $data['levels'] = $this->level_model->get_all();
      $this->load->view('templates/header');
      $this->load->view('users/register', $data);
      $this->load->view('templates/footer');
    } else {
      // Encrypt password
      $enc_password = md5($this->input->post('password'));
      $this->user_model->register($enc_password);
      $this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');
      redirect('blog');
    }
  }
  public function login(){
    $data['page_title'] = 'Login';
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header');
      $this->load->view('users/login', $data);
      $this->load->view('templates/footer');
    } else {
      
      $username = $this->input->post('username');
      // Get & encrypt password
      $password = md5($this->input->post('password'));
      // Login user
      $user_id = $this->user_model->login($username, $password);
      if($user_id){
        // Buat session
        $user_data = array(
          'user_id' => $user_id,
          'username' => $username,
          'logged_in' => true,
          'level' => $this->user_model->getUserLevel($user_id)
        );
        $this->session->set_userdata($user_data);
        // Set message
        $this->session->set_flashdata('user_login', 'You are now logged in');
        redirect('blog');
      } else {
        // Set message
        $this->session->set_flashdata('login_failed', 'Login is invalid');
        redirect('user/login');
      }
    }
  }

  public function logout(){
    // Unset user data
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('username');
    redirect('blog');
  }
}
?>