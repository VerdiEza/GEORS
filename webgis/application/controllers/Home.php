<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
    }
    

    public function index()
    {
        $config['center'] = '-6.921245889125309,106.92567216826816';
        $config ['zoom'] = 15 ;
        $this->googlemaps->initialize($config);
        $data =array (
                        'title' => 'Pemetaan Rumah Sakit Sukabumi',
                        'map' => $this->googlemaps->create_map(),
                        'isi'     => 'v_home'  
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
        ;
    }

}


