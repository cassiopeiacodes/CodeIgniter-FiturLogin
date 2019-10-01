<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('buildform');
		$this->load->helper('pesanserver');

		$this->load->model('buildlogin');

		if ( $this->session->has_userdata('notifikasi_server') )
		{
			$pesan = $this->session->flashdata('notifikasi_server');
	    _pesanserver($pesan);
		}
	}

	public function index()
	{
		$header['url']	 			= 'Daftar';
		$header['head_page']	= 'Daftar Sekarang';

		$data['login'] 				= _buildlogin();

		$this->load->view('auth/header',$header);
		$this->load->view('auth/login',$data);
		$this->load->view('auth/footer');
	}

	public function Validasi()
	{
		$process = $this->form_validation->run('login');
		$success = "sukses";

		$output['confirm']    = $process ? 'continue' : 'cancel';
		$output['email']      = form_error('email') != '' ? form_error('email') : $success;
		$output['password']   = form_error('password') != '' ? form_error('password') : $success;

		echo json_encode($output);
	}

	public function Process()
	{
		$email = $this->input->post('email');
		$pass	 = $this->input->post('password');

		$process = $this->buildlogin->login($email,$pass);

		//echo "<pre>";var_dump($this->session->userdata());echo "</pre>"; die();

		$url 	= $process == TRUE ? ( $this->session->userdata('level') == 'User' ? '/Member' : '/Admin' ) : '/Login';
		$msg	= $process == TRUE ? 'Selamat Datang!' : 'Terjadi Kesalahan! Pastikan email dan password anda benar';

		$this->session->set_flashdata('notifikasi_server', $msg);
		redirect($url);
	}
}
