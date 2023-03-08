<?php 


	$con = mysqli_connect('localhost','root','','adminlte');

  header('Content-type: application/json');
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Headers: *');
    header("Access-Control-Allow-Methods: 'GET,POST,PUT,DELETE,OPTIONS'");

    $data = json_decode(file_get_contents('php://input'), true);
    if ($data)
     {
    	$name=$data['name'];
    	$email=$data['email'];
    	$password=$data['password'];
    	$retypepassword=$data['retypepassword'];


    	$query="insert into login(name,email,password,retypepassword)values('$name','$email','$password','$retypepassword')";
    	mysqli_query($con,$query);
    }

    $query1="select * from login";
    $data=mysqli_query($con,$query1);

    $rows=array();

    while ($r=mysqli_fetch_assoc($data)) {
    	$rows[] = $r;
    }

    echo json_encode($rows);
 ?>
 

