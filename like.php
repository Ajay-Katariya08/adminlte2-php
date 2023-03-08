<?php 

 $connet = mysqli_connect('localhost','root','','adminlte');

 header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');



$bid= $_GET['id'];

   $selectdata="select * from likes where bid='$bid'";
     $res = mysqli_query($connet,$selectdata);

     if(mysqli_num_rows($res)==1){
        $likes = mysqli_fetch_assoc($res);
        $incr = ($likes["likes"]+1);
        $query = "update likes set  likes='$incr' where bid='$bid'";
        mysqli_query($connet,$query);

     }
     else{
        $query = "insert into likes (likes,bid) values(1,'$bid')";

        mysqli_query($connet,$query);
     }

    //  $r=array();
    // while ($row=mysqli_fetch_assoc($res)) 
    //  {
    // 		$r[]=$row;   
    //  }
    //   print json_encode($r);






  ?>