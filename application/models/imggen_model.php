<?php
class Imggen_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_input($title = FALSE)
	{
		if ($title === FALSE)
		{
			$query = $this->db->get('imggen');
			return $query->result_array();
		}

		$query = $this->db->get_where('imggen',array('title' => $title));
		return $query->row_array();
	}

	public function set_image()
	{
		$this->load->helper('url');

		$title = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $title,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('imggen', $data);
	}
}