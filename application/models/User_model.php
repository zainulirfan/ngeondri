<?php
Class User_model extends CI_Model
{
	private $table	= "user";
	private $id	= "user_id";

	public function __construct()
	{
		parent::__construct();
	}

	public function getall()
	{
		return $this->db->get($this->table)->result();
	}
	public function getid($query)
	{
		return $this->db->get_where($this->table, $query);
	}
	public function addid($item)
	{
		$this->db->insert($this->table, $item);
	}
	public function editid($id, $item)
	{
		$this->db->update($this->table, $item, array($this->id => $id));
	}
}