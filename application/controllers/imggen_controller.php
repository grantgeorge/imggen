<?php

class Imggen extends CI_Controller {

	public function view($page = 'home')
	{

		if ( ! file_exists('application/views/imggen/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			echo "error";
			// show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('imggen/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}
}