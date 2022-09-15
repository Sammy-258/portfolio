<?php

    $conn=mysqli_connect("localhost","root","","sammy");


    $data=array();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT *FROM `project` WHERE `id`=$id";
        
        $result=mysqli_query($conn, $sql);

        if($result){
            $row=mysqli_fetch_assoc($result);

            $data[]=$row;
            echo json_encode($data);
        }
    }

    if(isset($_GET['pes'])){
        $id=$_GET['pes'];
        $sql="SELECT *FROM `code` WHERE `id`=$id";
        
        $result=mysqli_query($conn, $sql);

        if($result){
            $row=mysqli_fetch_assoc($result);

            $data[]=$row;
            echo json_encode($data);
        }
    }



?>


