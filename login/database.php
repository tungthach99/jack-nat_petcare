<?php
	const DB_HOST = 'localhost';
	const DB_USERNAME = 'root';
	const DB_PASSWORD = '';
	const DB_NAME = 'jack_nat';

	$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	if(!$conn){
		die ('Error Connection : '.mysqli_connect_error());
	}
?>