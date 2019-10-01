<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buildregister extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('builduser');
	}


  public function daftar( $email, $passw )
	{
    /* check */
    !empty($email) OR exit('Email tidak boleh kosong!');
    !empty($passw) OR exit('Password tidak boleh kosong!');
    $this->check_email($email) == TRUE OR exit('Email sudah di daftarkan!');

    $lvl = $this->_genlevel( $email );

		$input = array(
			'email'		    => $email,
			'password'		=> _generatepassw($passw),
			'user_level'  => $lvl
		);

    $process = $this->db->insert( 'user_akun', $input );

    return $process;
	}

  private function _genLevel()
  {
    $this->db->from('user_akun');
    $this->db->limit(1);
    $query = $this->db->get();

    /* ID 1 untuk Super Admin sedangkan 3 untuk User */
    return $query->num_rows() == 0 ? 1 : 3;
  }

  // WARNING! Belum di cek untuk case sensitive
  /* untuk melakukan cek dengan kata kunci email */
  private function check_email( $email )
  {
    $this->db->like('email', $email);
    $this->db->from('user_akun');
    $query = $this->db->get();

    return $query->num_rows() == 0 ? TRUE : FALSE;
  }
}
