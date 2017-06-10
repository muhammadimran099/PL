<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "Paklist";
		$this->load->view('template/header', $data);
		$this->load->view('Home');
		$this->load->view('template/footer');
	}
}
