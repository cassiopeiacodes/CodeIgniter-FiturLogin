<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$process = $this->session->sess_destroy();

		session_start();
		$msg = $process == FALSE ? 'Anda telah keluar dari sesi saat ini!' : 'Gagal keluar dari sesi saat ini!';
		$this->session->set_flashdata('notifikasi_server', $msg);
		
		redirect('/');
	}
}
