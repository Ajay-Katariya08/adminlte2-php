<?php 

	header('Content-type: application/json');
	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Headers: *');

	$con = mysqli_connect('localhost','root','','adminlte');
	$data = json_decode(file_get_contents('php://input'), true);

       	$id = $data['id'];
        $name=$data['name'];
        $email=$data['email'];
        $discription=$data['discription'];
        // $status=$data['status'];
        // $img=$data['img'];

        $updatedata = "update general_form set name = '$name', email= '$email', discription = '$discription' where id = '$id'";
        mysqli_query($con,$updatedata);

 ?>