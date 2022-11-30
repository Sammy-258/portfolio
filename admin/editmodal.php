<?php

    include "connect.php";

    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $description=$_POST["description"];
        $code=$_POST["code"];
        $first=$_POST["first"];
        $second=$_POST["second"];
        $third=$_POST["third"];
        $id=$_POST["id"];



        $sql="UPDATE `code` SET `name`='$name',`code`='$code',`description`='$description',`first`='$first',`second`='$second',`third`='$third' WHERE id='$id'";

        $result=mysqli_query($conn, $sql);
        if($result){
            echo $id;
        }
    }

?>