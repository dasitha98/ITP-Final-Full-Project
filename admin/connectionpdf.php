<?php
$con = mysqli_connect('localhost','root','','supermarket');

if(!$con)
{
	die('connection error');
}