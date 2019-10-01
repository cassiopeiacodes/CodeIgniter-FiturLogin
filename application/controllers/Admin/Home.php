<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ( !$this->session->has_userdata('level') )
		{
			$this->session->set_flashdata('notifikasi_server','Akses ditolak!!!');
			redirect('/');
		}
		elseif ( $this->session->userdata('level') == 'User' )
		{
			$this->session->set_flashdata('notifikasi_server','Akses ditolak!!!');
			redirect('/');
		}

		$this->load->helper('pesanserver');

		if ( $this->session->has_userdata('notifikasi_server') )
		{
			$pesan = $this->session->flashdata('notifikasi_server');
	    _pesanserver($pesan);
		}
	}

	public function index()
	{
		$header['url']	 			= '/Logout';
		$header['head_page']	= 'Logout';

		$this->load->view('login-admin/header',$header);
		$this->load->view('login-admin/footer');
	}
}
