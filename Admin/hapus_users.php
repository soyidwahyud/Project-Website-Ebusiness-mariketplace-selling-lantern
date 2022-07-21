<?php
require'functions.php';

$id=$_GET["users"];
if(hapusUser($id)>0){
	echo"
	<script>
		alert('data Deleted');
		document.location.href='Tabel_users.php';
	</script>
		";
}
else{
	echo"
	<script>
		alert('data cant deleted');
		document.location.href='Tabel_users.php';
	</script>";
	echo"<br";
	echo mysqli_error($conn);
}
?>