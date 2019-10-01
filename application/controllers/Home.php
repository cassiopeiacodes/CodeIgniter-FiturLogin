<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Auto redirect untuk sesi yang telah dimulai
		if ( $this->session->has_userdata('level') & $this->session->has_userdata('email') & $this->session->has_userdata('id') )
		{
			$goto = $this->session->userdata('level') == 'User' ? 'Member' : 'Admin';
			redirect("/$goto");
		}

		// Auto redirect untuk sesi yang telah dimulai
		$this->load->helper('pesanserver');

		if ( $this->session->has_userdata('notifikasi_server') )
		{
			$pesan = $this->session->flashdata('notifikasi_server');
	    _pesanserver($pesan);
		}
	}

	public function index()
	{
		$header['url']	 			= 'Login';
		$header['head_page']	= 'Masuk Pengguna';

		$this->load->view('main/header', $header);
		$this->load->view('main/main');
		$this->load->view('main/footer');
	}
}
