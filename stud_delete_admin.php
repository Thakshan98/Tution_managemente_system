<?php
	include "database.php";
	session_start();
	$s="delete from student where ID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('student.php?mes=Data Deleted','_self');</script>";


?>