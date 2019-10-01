<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !function_exists('_generatepassw') )
{
  function _generatepassw( $passw )
  {
    !empty($passw) OR exit('Terjadi Kesalahan! Password tidak boleh kosong');

    $extra        = array(
                      'cost' => 13
                    );
    $generatepass = password_hash(
                      $passw,
                      PASSWORD_DEFAULT,
                      $extra
                    );

    return $generatepass;
  }
}

if ( !function_exists('_currentServerTime'))
{
  function _currentServerTime()
  {
    $CI =& get_instance();
    $query = $CI->db->query('SELECT CURRENT_TIMESTAMP()');
    $output = $query->row('CURRENT_TIMESTAMP()');
    return $output;
  }
}
?>
