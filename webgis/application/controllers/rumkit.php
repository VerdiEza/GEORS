<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class rumkit extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Data Rumah Sakit Sukabumi',
            'isi'     => 'rumkit/v_lists'  
        );
$this->load->view('template/v_wrapper', $data, FALSE);   
    }

}

/* End of file rumkit.php */
