<?php

include("connect.php");


if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $description=$_POST["description"];
    $image=$_FILES["image"]["name"];
    $tmp_image=$_FILES["image"]["tmp_name"];
    $first=$_POST["first"];
    $second=$_POST["second"];
    $third=$_POST["third"];
    $fourth=$_POST["fourth"];

    
    if(move_uploaded_file("$tmp_image", "../images/$image")){


    $sql="UPDATE `project` SET `name`='$name',`description`='$description',`image`='$image',`first`='$first',
                 `second`='$second',`third`='$third',`fourth`='$fourth' WHERE `id`='$id'";

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