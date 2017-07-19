<?php

include "connection.php";
$s = "select * from items";
$result = mysqli_query($conn, $s);
$name = $_POST["textbox1"];
$CGST = $_POST["textbox2"];
$SGST = $_POST["textbox3"];
$hsn = $_POST["textbox4"];
$iGST = $SGST + $CGST;
$flag=0;
while ($row=mysqli_fetch_array($result)){
    if($row[1]==$_POST["textbox1"]){
        $flag=1;
        break;
    }
}
if($flag==1){
    echo '<h3 class="text-danger">Item already exists in the record</h3>';
}
else{
    $s1 = "insert into items values(null,'".$name."','".$CGST."','".$SGST."','".$iGST."','".$hsn."')";
    mysqli_query($conn, $s1);
//    header("location: view_items.php");
    echo $s1;
}
