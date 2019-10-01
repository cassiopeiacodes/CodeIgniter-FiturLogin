<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('_buildregis'))
{
  function _buildregis()
  {
    $data['open']  = array(
      'id' 			    => 'form-daftar',
      'class'		    => 'pb-2 w-100',
      'novalidate'  => 'novalidate',
    );
    $data['email'] = array(
      'name'					    => 'email',
      'id'   					    => 'email',
      'type'					    => 'email',
      'class'					    => 'form-control',
      'value'					    => set_value('email'),
      'placeholder'		    => 'Masukkan Email',
      'aria-label'        => 'Email',
      'aria-describedby'  => 'Email',
    );
    $data['password'] = array(
      'name'					    => 'password',
      'id'						    => 'password',
      'type'					    => 'password',
      'class'					    => 'form-control',
      'value'					    => set_value('password'),
      'placeholder'		    => 'Masukkan Password',
      'aria-label'        => 'Password',
      'aria-describedby'  => 'Password',
    );
    $data['repassword'] = array(
      'name'					    => 'repassword',
      'id'						    => 'repassword',
      'type'					    => 'password',
      'class'					    => 'form-control',
      'value'					    => set_value('repassword'),
      'placeholder'		    => 'Masukkan Ulang Password',
      'aria-label'        => 'Repassword',
      'aria-describedby'  => 'Repassword',
    );
    $data['showpassword'] = array(
      'id'						    => 'showpassword',
      'type'					    => 'checkbox',
      'class'					    => 'form-control',
      'value'					    => '#form-daftar',
      'aria-label'        => 'Show Password',
      'aria-describedby'  => 'Show Password',
      'checked'           => FALSE,
    );

    return $data;
  }
}
else exit('Fungsi _buildregis sudah ada! Anda tidak dapat menggunakannya');

if (!function_exists('_buildlogin'))
{
  function _buildlogin()
  {
    $data['open']  = array(
      'id' 			=> 'form-login',
      'class'		=> 'pb-2 w-100',
      'novalidate'  => 'novalidate',
    );
    $data['email'] = array(
      'name'					    => 'email',
      'id'   					    => 'email',
      'type'					    => 'email',
      'class'					    => 'form-control',
      'value'					    => set_value('email'),
      'placeholder'		    => 'Masukkan Email',
      'aria-label'        => 'Email',
      'aria-describedby'  => 'Email',
    );
    $data['password'] = array(
      'name'					    => 'password',
      'id'						    => 'password',
      'type'					    => 'password',
      'class'					    => 'form-control',
      'value'					    => set_value('password'),
      'placeholder'		    => 'Masukkan Password',
      'aria-label'        => 'Password',
      'aria-describedby'  => 'Password',
    );

    $data['showpassword'] = array(
      'id'						    => 'showpassword',
      'type'					    => 'checkbox',
      'class'					    => 'form-control',
      'value'					    => '#form-login',
      'aria-label'        => 'Show Password',
      'aria-describedby'  => 'Show Password',
      'checked'           => FALSE,
    );

    return $data;
  }
}
else exit('Fungsi _buildlogin sudah ada! Anda tidak dapat menggunakannya');
