<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


if($mysqli->query("INSERT INTO contact (fname, lname, email, subject, message) VALUES('$fname', '$lname', '$email', '$subject', '$message')")){
	echo 
      "
        <script>
          alert('Form Inserted in our database, thanks for your reviews :)');
          document.location.href='contact.php';
        </script>
	  ";
}

//header ("location:contact.php");

?>
