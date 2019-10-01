<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !function_exists('_pesanserver') )
{
  function _pesanserver( $pesan )
  {
    !empty($pesan) OR exit('Terjadi Kesalahan! Password tidak boleh kosong');

    $msg  = '<div class="modal" id="PesanServer" tabindex="-1" role="dialog" aria-labelledby="PesanServerTitle" aria-hidden="true">';
    $msg .= '<div class="modal-dialog modal-dialog-centered" role="document">';
    $msg .= '<div class="modal-content">';
    $msg .= '<div class="modal-header">';
    $msg .= '<h5 class="modal-title" id="PesanServerTitle">Notifikasi</h5>';
    $msg .= '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    $msg .= '<span aria-hidden="true">&times;</span>';
    $msg .= '</button>';
    $msg .= '</div>';
    $msg .= '<div class="modal-body">';
    $msg .= $pesan;
    $msg .= '</div>';
    $msg .= '<div class="modal-footer">';
    $msg .= '<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Mengerti</button>';
    $msg .= '</div>';
    $msg .= '</div>';
    $msg .= '</div>';
    $msg .= '</div>';

    echo $msg;
    return TRUE;
  }
}
?>
