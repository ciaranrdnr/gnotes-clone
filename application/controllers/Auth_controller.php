<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
    {
        $this->load->view('Login_view1');
    }

    public function register()
    {
        $this->load->view('Signup_view');
    }
     public function proses_tambah()
    {
        $data = [
                    'Email' => $this->input->post('Email'),
                    'Password' => md5($this->input->post('Password'))
        ];

        $this->M_auth->simpan($data);
        
    }
    public function all()
    { 
      if (empty($this->session->email)){
        redirect('Auth_Controller');
      }else{
        redirect('All_Controller');
      }
  }
    public function new()
    {
        redirect('newnote_controller');
    }
    public function trash()
    {
        $this->load->view('Trash_view');
    }
    public function proses_edit()
    {
        $id = $this->input->post('id');
        $item = [
                    'Password' => md5($this->input->post('Password'))
                ];
        $this->M_auth->update($id,$item);
        redirect('Auth_controller/all');
    }

    
    public function proses_login(){
    $Email = $this->input->post('Email'); // Ambil isi dari inputan username pada form login
    $Password = md5($this->input->post('Password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->M_auth->auth_login($Email, $Password); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
       redirect('Auth_Controller');
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'id'=>$user->id,
          'authenticated'=>true, // Buat session authenticated dengan value true
          'email'=>$user->Email,  // Buat session username
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('Auth_controller/all'); // Redirect ke halaman welcome
      }else{
        redirect('Auth_Controller');

      }
    }
  }
  // public function logout()
  // {
  //     $this->load->logout();
  // }
  	public function logout(){
      $this->session->unset_userdata($session);
		$this->session->sess_destroy($session);
		redirect('Auth_controller');
	}



}
