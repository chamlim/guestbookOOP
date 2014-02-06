<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$rec = new MessageDAO();
	$id = $_GET['id']; 
	$rec->approveMessage($id);
	echo "<script>alert('Message Approved!!');window.location.href='back-end.php';</script>";
 ?>