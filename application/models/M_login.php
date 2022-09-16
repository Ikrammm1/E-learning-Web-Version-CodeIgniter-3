<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
  public $user = 'username';
  function cek_login($where){
    return $this->db->get_where('user', $where);
  }

  function get_username($user){
    $this->db->where('username', $user);
    return $this->db->get('user')->row();
  }




}


 ?>
