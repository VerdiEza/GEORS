<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data =array (
            'title' => 'Data User',
            'isi'     => 'User/v_lists'  
        );
$this->load->view('template/v_wrapper', $data, FALSE); 
    }

}

/* End of file Controllername.php */
