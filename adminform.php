<?php 

 $connet = mysqli_connect('localhost','root','','adminlte');

 header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');


    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data)) {
       

        $name=$data['name'];
        $email=$data['email'];
        $discription=$data['discription'];
        $status=$data['status'];
        $img=$data['img'];


    $insertdata="insert into general_form(name,email,discription,status,img) values('$name','$email','$discription','$status','$img')";
    
    mysqli_query($connet,$insertdata);

    }

   $selectdata="select * from general_form";
     $res = mysqli_query($connet,$selectdata);


     $r=array();
    while ($row=mysqli_fetch_assoc($res)) 
     {
    		$r[]=$row;   
     }
      print json_encode($r);

  ?>