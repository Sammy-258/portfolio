<?php

include("connect.php");


if(isset($_POST["submit"])){
    $name=mysqli_real_escape_string($conn, $_POST["name"]);
    $description=mysqli_real_escape_string($conn, $_POST["description"]);
    $code=mysqli_real_escape_string($conn, $_POST["code"]);
    $first=mysqli_real_escape_string($conn, $_POST["first"]);
    $second=mysqli_real_escape_string($conn, $_POST["second"]);
    $third=mysqli_real_escape_string($conn, $_POST["third"]);
    

    
    


    $sql="INSERT INTO `code`(`name`,`description`,`code`,`first`,`second`,`third`)
        VALUES('$name','$description','$code','$first','$second','$third')";

    $result=mysqli_query($conn, $sql);


    if($result){
        header("location:admin.php?success=Uploaded successfully");
    }
    else{
        header("location:admin.php?error=error uploading");
    }




}else{
    header("location:admin.php?error=error recieving data from the form");
    
}





?>