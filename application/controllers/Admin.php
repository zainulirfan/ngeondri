<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'um', TRUE);
	}

	public function index()
	{
		$data['title'] 	= 'Profile Admin';
		$data['view']	= 'admin/konten/list_user';
		$data['user']	= $this->um->getall();
		$this->load->view('admin/fix/header', $data);
	}

	public function detail_user($id)
	{
		$data['title']	= 'Detail User';
		$data['view']	= 'admin/konten/detail_user';
		$data['user_detail']	= $this->um->getid(array('user_id'=>$id))->result();
		$this->load->view('admin/fix/header', $data);
		// var_dump($data['user_detail']);
	}
	public function edit_data($id)
	{
		$data['title']='Edit data user';
		$data['view']='admin/konten/edit_data';
		$data['user_detail']= $this->um->getid(array('user_id'=>$id))->result();
		$this->load->view('admin/fix/header', $data);
	}
	public function ex_edit_data()
	{
		$id = $this->input->post('id');
		$item = $this->input->post('inp');
		$this->um->editid($id, $item);
		redirect('admin', 'refresh');
	}
	public function tambah_data()
	{
		$data['title']='Formulir Tambah Data pengguna';
		$data['view']='admin/konten/tambah_user';
		$this->load->view('admin/fix/header', $data);
	}
	public function ex_tambah_data()
	{
		$item = $this->input->post('inp');
		$this->um->addid($item);
		redirect('admin/', 'refresh');
	}
}
