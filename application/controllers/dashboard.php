<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function index()
	{
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('login/index');
        $this->load->view('layout/footer');
	}
}