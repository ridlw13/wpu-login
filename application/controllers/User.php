<?php 

defined('BASEPATH') or exit('No dericet script access allowed');

class User extends CI_Controller
{
      public function index()
      {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            echo 'Selamat datang ' . $data['user']['name'];
      }
}


?>