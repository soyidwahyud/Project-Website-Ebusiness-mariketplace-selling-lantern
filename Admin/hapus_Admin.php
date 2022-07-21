<?php
require'functions.php';

$id=$_GET["admin"];
if(hapus4($id)>0){
	echo"
	<script>
		alert('data Deleted');
		document.location.href='Tabel_admin.php';
	</script>
		";
}
else{
	echo"
	<script>
		alert('data cant deleted');
		document.location.href='Tabel_admin.php';
	</script>";
	echo"<br";
	echo mysqli_error($conn);
}
?>