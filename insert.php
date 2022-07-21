<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];


if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) 
VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
	echo 
      "
        <script>
          alert('Register Sucessfully');
          document.location.href='login.php';
        </script>
	  ";
	  $error = true;  
}
if (isset($error))
      {    
     echo 
      "
        <script>
          alert('invalid register');
          document.location.href='register.php';
        </script>
      ";
      }

//header ("location:login.php");

?>
