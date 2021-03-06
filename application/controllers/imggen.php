<?php
class Imggen extends CI_Controller {

	// Construct & load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('imggen_model');
	}

	public function index()
	{
		$data['imggen']= $this->imggen_model->get_input();
		$data['title'] = 'Image creation';

		$this->load->view('imggen/index', $data);
	}

	public function view($title)
	{
		$data['imggen_item'] = $this->imggen_model->get_input($title);

		if (empty($data['imggen_item']))
		{
			echo 'Error: imggen view';
		}

		$data['title'] = $data['imggen_item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('imggen/view', $data);
	}

	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create image';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('imggen/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->imggen_model->set_image();
			$this->load->view('imggen/success');
		}
	}
	
	public function render($title)
	{
		$data['imggen_item'] = $this->imggen_model->get_input($title);

		if (empty($data['imggen_item']))
		{
			echo 'Error: imggen render';
		}

		$data['title'] = $data['imggen_item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('imggen/render', $data);
	}
}