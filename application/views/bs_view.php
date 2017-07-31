<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo $title;
foreach($ans as $value)
{
	echo "Name :".$value->name."<br>";
	echo "Contact :".$value->contact."<br>";
	echo "Email :".$value->email."<br>";
	echo "<hr>";
}
	

?>
