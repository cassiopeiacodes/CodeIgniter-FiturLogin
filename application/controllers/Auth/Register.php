<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('buildform');
		$this->load->helper('pesanserver');

		$this->load->model('buildregister');

		/* Notifikasi */
		$check = $this->session->has_userdata('notifikasi_server');

		if ( $check )
		{
			$pesan = $this->session->flashdata('notifikasi_server');
	    _pesanserver($pesan);
		}
	}

	public function index()
	{
		$header['url']	 			= 'Daftar';
		$header['head_page']	= 'Daftar Sekarang';

		$data['regis'] 				= _buildregis();

		$this->load->view('auth/header',$header);
		$this->load->view('auth/daftar',$data);
		$this->load->view('auth/footer');
	}

  public function Validasi()
  {
    $process = $this->form_validation->run('register');

		$success = "sukses";

		$output['confirm']    = $process ? 'continue' : 'cancel';
		$output['email']      = form_error('email') != '' ? form_error('email') : $success;
		$output['password']   = form_error('password') != '' ? form_error('password') : $success;
		$output['repassword'] = form_error('repassword') != '' ? form_error('repassword') : $success;

		echo json_encode($output);
  }

	public function process()
	{
		$email 		= $this->input->post('email');
		$pass 		= $this->input->post('password');

		$process 	= $this->buildregister->daftar( $email, $pass );

		$msg 			= $process ? 'Berhasil mendaftarkan akun!' : 'Akun Gagal Di Daftarkan!';
		$url			= $process ? '/Login' : '/Daftar';

		$this->session->set_flashdata('notifikasi_server', $msg);

		redirect($url);
	}

}
