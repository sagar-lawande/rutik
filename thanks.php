<?php
 $name = $_REQUEST['txtName'];
 $email = $_REQUEST['txtEmail'];
 $con = mysqli_connect("localhost", "root","", "sagar") or die("Error Connection Database");
 $q=mysqli_query($con, "insert into
 wad(name,email) values
 ('$name','$email')");
 if($q)
 {
 echo "Record inserted successfully"
 }
 else
 {
 echo mysqli_error($con);
 }
 ?>