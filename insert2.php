<?php

include 'config.php';

$nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $kota = $_POST["kota"];
        $postcode = $_POST["postcode"];
        $notelp = $_POST["notelp"];
        $payment = $_POST["payment"];

if($mysqli->query("INSERT INTO orders(nama, alamat, kota, postcode, notelp, payment)VALUES('$nama','$alamat','$kota','$postcode','$notelp','$payment')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:success.php");

?>

