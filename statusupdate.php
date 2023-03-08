<?php 
	
 $connet = mysqli_connect('localhost','root','','adminlte');

 header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');


    $data = json_decode(file_get_contents('php://input'), true);

    $u_id = $data['status'];

    $id = $data['id'];

     $updatedata = "update general_form set status = '$u_id' where id = '$id'";

     mysqli_query($connet,$updatedata);
 ?>