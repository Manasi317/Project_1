<?php
session_start();
require_once("db_connection.php");
$id=$_POST["id"];
$u_password=$_POST["u_password"];
$query= 'select * from user where id="'.$id.'" and u_password="'.$u_password.'"';
$result = mysqli_query($conn, $query);
if (mysqli_affected_rows($conn)==1 && $result) {
     echo "login successfully";
     while($row= mysqli_fetch_assoc($result))
     {
         if($row["u_type"]=='A')
         {
             $_SESSION['id']=$id;
             $_SESSION['u_type'] = 'A';
             $_SESSION['u_name'] = $row['u_name'];
             header("location:index5.php");
         }
         else
         {
             $_SESSION['id']=$id;
             $_SESSION['u_type'] = "NU";
             $_SESSION['u_name'] = $row['u_name'];
             header("location:Activities.php");
         }
     }
         
 } else {
     echo "wrong user name or password";
 }
 mysqli_close($conn);
?>