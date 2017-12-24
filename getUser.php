<?php 
   $con = mysqli_connect("localhost","root","123456789","user");
   mysqli_set_charset($con,"utf8");

   $Name = $_GET["Name"];
   $Telephone = $_GET["Telephone"];
   $Email = $_GET["Email"];
   $Message = $_GET["Message"];
   $query = "INSERT INTO user_1 VALUES('$Name','$Telephone','$Email','$Message')";
   mysqli_query($con,$query);
   header("location:index1.html");
?>