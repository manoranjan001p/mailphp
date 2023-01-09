<?php

echo "<h3> How to send to email using php    </h3>";

 $id = "manoranjan98p@gmail.com";
 $subject = "Hi ";
 $body=" the body content has to be showed here";
 $headers = "From: vky13112000@gmail.com";

 if(mail($id,$subject,$body,$headers)){
    echo "Your Email has send successfully";
 }

 else{
    echo "Sorry, Email can not be sent";
 }
 ?>

