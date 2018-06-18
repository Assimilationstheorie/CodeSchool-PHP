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

	public function anonymousfunctions()
	{
		$data = ['title' => 'Anonyme Funktionen'];
		$this->load->view('templates/header', $data);
		$this->load->view('anonymousfunctions');
		$this->load->view('templates/footer');
	}

	public function instances()
	{
		$data = ['title' => 'Instanzen'];
		$this->load->view('templates/header', $data);
		$this->load->view('instances');
		$this->load->view('templates/footer');
	}
}
