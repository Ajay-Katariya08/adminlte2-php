<?php 
	 $connet = mysqli_connect('localhost','root','','adminlte');
	 header('Content-type: application/json');
	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Headers: *');
    // $data = json_decode(file_get_contents('php://input'), true);


	$query = "select *from likes";
	$res= mysqli_query($connet,$query);
	 $i=0;
     $r= array();
     while ($row=mysqli_fetch_assoc($res)) {
    		$r[$i]=array("likes"=>$row['likes'],"bid"=>$row["bid"]);
    		$i++;   
     }
      print json_encode($r);
 ?>