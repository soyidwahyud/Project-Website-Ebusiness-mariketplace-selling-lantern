<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT id,email,password,fname from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password) {

      $_SESSION['username'] = $username;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;
      
      header("location:index.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo 
      "
        <script>
          alert('Invalid Login');
          document.location.href='login.php';
        </script>
      ";
  //echo '<h1>Invalid Login! Redirecting...</h1>';
  //header("Refresh: 1; url=index.php");
}


?>
