<?php
 $uname=$_POST["uname"];
 $upassword=$_POST["upassword"];
 $ucontact=$_POST["ucontact"];
 $uemail=$_POST["uemail"];
 $urole=$_POST["urole"];
 $servername="localhost";
 $username="root";
 $password="";
 $database="eliteservicesdb";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn)
 {
  die("Error Detected".mysqli_error($conn));
 }
 else
 {
  $sql = "INSERT INTO userstb VALUES ('$uname', '$upassword','$urole','$uemail',$ucontact)";
  if ($conn->query($sql) === TRUE) {
      echo "Registered successfully";
      header("Location: ulog.html"); 
      exit;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
 }
 
?>