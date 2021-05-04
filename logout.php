<?php
session_start();

 $server="localhost";
 $aunmae="root";
 $apassword = "";
 $db_name = "login_db";
 $conn2 = mysqli_connect($server, $aunmae, $apassword, $db_name);
//session_unset();
//session_destroy();
 $myid = $_SESSION['id'];
 $myact = "Logout";

 $eventsql = "INSERT INTO event_log(user_id, activity) VALUES ('$myid','$myact' )";
 $resultevent = mysqli_query($conn2, $eventsql) or die(mysqli_error($conn2));
 if($resultevent){
 header("Location: login.php");
 }else{
 echo "Event log crash";
 }
