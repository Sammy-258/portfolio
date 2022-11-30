<?php

include "admin/connect.php";

if(isset($_POST["submit"])){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $image=$_FILES["image"]["name"];
    $tmp_image=$_FILES["image"]["tmp_name"];
    $description=$_POST["description"];
    

    move_uploaded_file($tmp_image, "images/$image");

    $sql="INSERT INTO `testimonail` (`firstname`, `lastname`, `image`, `testimonial`)VALUES('$firstname', '$lastname', '$image', '$description')";
    $result=mysqli_query($conn, $sql);

    if($result){
       header("location:index.php");
    }else{
        header("location:index.php?error=failed to send testimonial");
    }

}

?>