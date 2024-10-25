<?php
    //include db connection
    require_once('dbconn.php');

    extract($_POST);
    $fullname = $fullname;
    $email = $email;
    $phone = $phone;
    $comments = $comments;

    $sql = "INSERT INTO Home(messageid,fullname,email,phone,usermessage) VALUES(NULL,'$fullname','$email','$phone','$comments')";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    if($result==true){
        echo 1;
    }else{
        echo 0;
    }



?>

