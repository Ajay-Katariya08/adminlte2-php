<?php 

	header('Content-type: application/json');
	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Headers: *');

	$con = mysqli_connect('localhost','root','','adminlte');


	$data = json_decode(file_get_contents('php://input'), true);

	$id=$data['id'];

	$dele="delete from general_form where id='$id'"; 
	mysqli_query($con, $dele);


 ?>