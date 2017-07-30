<?php

 class School extends CI_Model
{
	
	function getData()
	{
	
	$this->load->db('database');
	$result = $this->db->query("select * from student");
	return $result;
	
	}
}

?>