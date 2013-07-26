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
}