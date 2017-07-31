<?php

 class School extends CI_Model
{
	
	function getData()
	{
	
	$result = $this->db->query("select * from student");
	return $result->result();
	
	}
}

?>