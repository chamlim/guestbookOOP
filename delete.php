<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$rec = new MessageDAO();
	$id = $_GET['id']; 
	$rec->deleteMessage($id);
	echo "<script>alert('Successfully Deleted!!');window.location.href='back-end.php';</script>";
 ?>


