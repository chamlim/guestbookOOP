<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$rec = new MessageDAO();
	$id = $_GET['id']; 
	$rec->rejectMessage($id);
	echo "<script>alert('Message Rejected!!');window.location.href='back-end.php';</script>";
 ?>