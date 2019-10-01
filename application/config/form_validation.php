<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['error_prefix'] = "<div class='text-danger'> *";
$config['error_suffix'] = '</div>';
/*  register verification */
$config['register']      = array(
  array(
    'field'         => 'email',
    'label'         => "<strong>email</strong>",
    'rules'         => 'trim|required|valid_email|is_unique[user_akun.email]',
    'errors'      => array(
      'required'      => '{field} tidak boleh kosong!',
      'valid_email'   => 'penulisan {field} salah!',
      'is_unique'     => '{field} tidak dapat digunakan!'
    ),
  ),
  array(
    'field'         => 'password',
    'label'         => "<strong>password</strong>",
    'rules'         => 'trim|required|min_length[8]|max_length[15]|differs[email]|alpha_numeric',
    'errors'        => array(
      'required'      => '{field} tidak boleh kosong!',
      'differs'       => '{field} tidak boleh sama dengan {param}!',
      'min_length'    => '{field} tidak boleh kurang dari {param}',
      'max_length'    => '{field} tidak boleh lebih dari {param}!',
      'alpha_numeric' => 'hanya boleh menggunakan huruf dan angka saja di {field}!',
    ),
  ),
  array(
    'field'         => 'repassword',
    'label'         => "<strong>password ulang</strong>",
    'rules'         => 'trim|required|matches[password]',
    'errors'      => array(
      'required'      => '{field} tidak boleh kosong!',
      'matches'       => '{field} tidak cocok!',
    ),
  ),
);

/*  login verification */
$config['login']      = array(
  array(
    'field'         => 'email',
    'label'         => "<strong>email</strong>",
    'rules'         => 'trim|required|valid_email',
    'errors'      => array(
      'required'      => '{field} tidak boleh kosong!',
      'valid_email'   => 'penulisan {field} salah!',
    ),
  ),
  array(
    'field'         => 'password',
    'label'         => "<strong>password</strong>",
    'rules'         => 'trim|required',
    'errors'        => array(
      'required'      => '{field} tidak boleh kosong!',
    ),
  ),
);

?>
