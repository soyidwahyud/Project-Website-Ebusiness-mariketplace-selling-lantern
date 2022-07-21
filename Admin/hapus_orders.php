<?php
require'functions.php';

$id=$_GET["orders"];
if(hapusOrders($id)>0){
	echo"
	<script>
		alert('data Deleted');
		document.location.href='Tabel_orders.php';
	</script>
		";
}
else{
	echo"
	<script>
		alert('data cant deleted');
		document.location.href='Tabel_orders.php';
	</script>";
	echo"<br";
	echo mysqli_error($conn);
}
?>