<?php
include("inc/connect.php");
 $name= $_POST['name'];
 $email=$_POST['email'] ;
 $message=$_POST['message'];
 $sql = "INSERT INTO `message` (`name`, `email`, `message`)VALUES ('".$name."', '".$email."', '".$message."')";
 $stmt = $conn->prepare($sql);
 $stmt->execute();
if($stmt){
    echo"<div class='success-msg'> Thank you so much ! your message has been added , we will contact you as soon as possible </div>";
     header("Refresh: 5; url=index.php");
  ob_end_flush();
  exit();
}else {
  echo"<div class='error-msg'>ERROR</div>";
}

?>