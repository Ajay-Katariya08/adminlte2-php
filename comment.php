<?php 

 $connet = mysqli_connect('localhost','root','','adminlte');

 header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');


    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data)) {
       
    	$id=$data['id'];
        $name=$data['name'];
        $email=$data['email'];
        $discription=$data['discription'];
        


    $insertdata="insert into comment(name,email,discription,bid) values('$name','$email','$discription','$id')";
    
    mysqli_query($connet,$insertdata);

    }
    $id= $_GET['id'];
   $selectdata="select * from comment where bid='$id'";
     $res = mysqli_query($connet,$selectdata);


     $r=array();
    while ($row=mysqli_fetch_assoc($res)) 
     {
    		$r[]=$row;   
     }
      print json_encode($r);






  ?>