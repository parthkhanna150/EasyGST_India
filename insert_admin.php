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
 }
 if($flag==1){
     echo '<h3 class="text-danger">Duplicate Email Address</h3>';
 }
 else{
     $s1 = "insert into admins values('".$_POST["textbox1"]."','".$_POST["textbox2"]."','".$_POST["textbox4"]."','".$_POST["sell"]."',null)";
     mysqli_query($conn, $s1);
     header("location: view_admin.php");//?q is basically passing a string which has an implication as specified
 }
