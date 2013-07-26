<?php

class Imggen extends CI_Controller {

	/*
	// Construct & load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('imggen_model');
	}
	*/

	public function view($page = 'home')
	{

		if ( ! file_exists('application/views/imggen/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			echo 'Error: Page does not exist';
			// show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		//$this->load->view('templates/header', $data);
		$this->load->view('imggen/'.$page, $data);
		//$this->load->view('templates/footer', $data);

	}

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create image';

		$this->form_validation->set_rules('text','text','required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('imggen/create');
		}
		else
		{
			$this->load->view('imggen/succes');
		}
	}
}