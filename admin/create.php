<?php

include("connect.php");


if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $description=$_POST["description"];
    $image=$_FILES["image"]["name"];
    $tmp_image=$_FILES["image"]["tmp_name"];
    $first=$_POST["first"];
    $second=$_POST["second"];
    $third=$_POST["third"];
    $fourth=$_POST["fourth"];

    
    if(move_uploaded_file("$tmp_image", "../images/$image")){


    $sql="INSERT INTO `project`(`name`,`description`,`image`,`first`,`second`,`third`,`fourth`)
        VALUES('$name','$description','$image','$first','$second','$third','$fourth')";

    $result=mysqli_query($conn, $sql);


    if($result){
        header("location:admin.php?success=Uploaded successfully");
    }
    else{
        header("location:admin.php?error=error uploading");
    }
}else{
    header("location:admin.php?error=failed to upload images");
}



}else{
    header("location:admin.php?error=error recieving data from the form");
    
}





?>