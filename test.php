<?php
	session_start();
	foreach ($_SESSION['membre'] as $key=>$value){
		echo $key." ".$value;
	}
?>