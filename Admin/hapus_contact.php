<?php
require'functions.php';

$id=$_GET["contact"];
if(hapusContact($id)>0){
	echo"
	<script>
		alert('data Deleted');
		document.location.href='Tabel_contact.php';
	</script>
		";
}
else{
	echo"
	<script>
		alert('data cant deleted');
		document.location.href='Tabel_contact.php';
	</script>";
	echo"<br";
	echo mysqli_error($conn);
}
?>