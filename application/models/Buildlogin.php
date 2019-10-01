<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buildlogin extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('builduser');
    $this->load->helper('date');
	}


  public function login( $email, $passw )
	{
    /* check */
    !empty($email) OR exit('Email tidak boleh kosong!');
    !empty($passw) OR exit('Password tidak boleh kosong!');

    $check = $this->check_email($email);

    if ( $check == FALSE ) return FALSE;
    else $check = $this->check_password($email,$passw);

    if ( $check == FALSE ) return FALSE;
    else $sess_data = $this->get_login($email);

    if ( isset($sess_data) ) $process = $this->process_login( $sess_data['id'] );
    else return FALSE;

    if ( isset($process) ) $process = $this->session->set_userdata($sess_data);
    else return FALSE;

    return TRUE;
	}

  // WARNING! Belum di cek untuk case sensitive
  /* untuk melakukan cek dengan kata kunci email */
  private function check_email( $email )
  {
    $this->db->like('email', $email);
    $this->db->from('user_akun');
    $query = $this->db->get();

    return $query->num_rows() != 0 ? TRUE : FALSE;
  }

  private function check_password( $email, $pass )
  {
    $this->db->select('password');
    $this->db->like('email', $email);
    $this->db->limit(1);
    $this->db->from('user_akun');
    $query = $this->db->get();

    $pass_hash = $query->row('password');

    return password_verify($pass,$pass_hash);
  }

  private function get_login( $email )
  {
    $this->db->select('user_akun.email, user_akun.id, user_level.nama as level');
    $this->db->like('email', $email);
    $this->db->limit(1);
    $this->db->join('user_level', 'user_akun.user_level = user_level.id');
    $this->db->from('user_akun');
    $query = $this->db->get();

    return $query->row_array();
  }

  private function process_login( $id )
  {
    $now = _currentServerTime();
    $this->db->set('last_login', $now );
    $this->db->where('id',$id);
    $process = $this->db->update('user_akun');

    return $process;
  }
}
