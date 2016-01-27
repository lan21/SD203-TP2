<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}

	public function set_news()
	{
		$this->load->helper('url');

		$title = htmlspecialchars($this->input->post('title'));

		$slug = url_title($title, 'dash', TRUE);

		$data = array(
			'title' => $title,
			'slug' => $slug,
			'text' => htmlspecialchars($this->input->post('text'))
		);

		return $this->db->insert('news', $data);
	}

	public function delete_new($id)
	{
		$this->db->delete('news',array('id'=>$id));
	}
}