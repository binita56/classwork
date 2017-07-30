<?php

function myData()
{
$this->load->model('school_model');
$result=$this->school_model->getData();
return $result;
}

?>
