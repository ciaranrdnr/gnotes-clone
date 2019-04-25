<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newnote_controller extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('m_auth');
		$this->load->model('m_notes');
		
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['data'] = null;
		$this->load->view('Newnote_view', $data);
	}
	
	public function editNotes($id){
		$data['data'] = $this->m_notes->getById($id);
		$this->load->view('Newnote_view',$data);
	}
	public function addNotes(){
		$this->m_notes->save();
		redirect('Auth_controller/all');
	}
	public function do_edit($id){
		$this->m_notes->update($id);
		redirect('auth_controller/all');
	}
	public function do_delete($id){
		$this->m_notes->delete($id);
		redirect('auth_controller/all');
	}
	public function do_upload(){
		$config['upload_path'] = '../assets/';
		$config['allowed_types'] = '*';
		$config['max_size'] = '2000000048';
		$config['max_width'] = '2048' ;
		$config['max_height'] = '4096';
		// $this->load->library('upload', $config);
		// if(!$this->upload->do_upload()){
		// 	$error =  array('error'=> $this->upload->display_errors())
		// 	$this ->load->view('Newnote_view', $error);
		// }else{
			  
		// }

	}
	
}
