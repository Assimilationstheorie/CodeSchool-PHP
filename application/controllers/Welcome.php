<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data = ['title' => 'Welcome'];
		$this->load->view('templates/header', $data);
		$this->load->view('welcome');
		$this->load->view('templates/footer');
	}

	public function references()
	{
		$data = ['title' => 'Referenzen'];
		$this->load->view('templates/header', $data);
		$this->load->view('references');
		$this->load->view('templates/footer');
	}
}
