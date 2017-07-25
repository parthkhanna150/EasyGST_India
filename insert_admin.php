<?php
 include "connection.php";
 $s = "select * from admins";
 $result = mysqli_query($conn, $s);
 $flag=0;
 while ($row=mysqli_fetch_array($result)){
     if($row[0]==$_POST["textbox1"]){
         $flag=1;
         break;
     }
     if($_POST['textbox2']!=$_POST['textbox3']){
         $flag=2;
         break;
     }
 }

 if($flag==1){
     header("location: add_admin.php?emails=Admin with same email already present!");
 }
 elseif ($flag==2){
     header("location: add_admin.php?passwords=Passwords don't match!");
 }
 else{
     $s1 = "insert into admins values('".$_POST["textbox1"]."','".$_POST["textbox2"]."','".$_POST["textbox4"]."','".$_POST["sell"]."',null)";
     mysqli_query($conn, $s1);
     header("location: view_admin.php");
 }
