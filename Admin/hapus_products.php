<?php
require'functions.php';

$id=$_GET["products"];
if(hapusProducts($id)>0){
	echo"
	<script>
		alert('data Deleted');
		document.location.href='Tabel_products.php';
	</script>
		";
}
else{
	echo"
	<script>
		alert('data cant deleted');
		document.location.href='Tabel_products.php';
	</script>";
	echo"<br";
	echo mysqli_error($conn);
}
?>