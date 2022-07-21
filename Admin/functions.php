<?php
//membuat koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "ebisnis");

 $user = "SELECT * FROM users";
 $exe = mysqli_query($conn, $user);
 $admin = "SELECT * FROM admin";
 $exe2 = mysqli_query($conn,$admin);
 $products = "SELECT * FROM products";
 $exe3 = mysqli_query($conn,$products);
 $orders = "SELECT * FROM orders";
 $exe4 = mysqli_query($conn,$orders);
 $contact = "SELECT * FROM contact";
 $exe5 = mysqli_query($conn,$contact);
//var_dump($exe);
 //$mhs= mysqli_fetch_row($exe);
 //$mhs= mysqli_fetch_assoc($exe);
 //$mhs= mysqli_fetch_array($exe);
//$mhs= mysqli_fetch_object($exe);
  //var_dump($mhs->Nama);
 /*while ($mhs=mysqli_fetch_assoc($exe)) {
 	var_dump($mhs);

 }*/
/*
 
 */
function hapusUser($users){
 	global $conn;
 	$query="delete from users where id=$users";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }
 function hapusProducts($products)
 {
 	global $conn;
 	$query="delete from products where id=$products";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }
 function hapusOrders($orders)
 {
 	global $conn;
 	$query="delete from orders where id=$orders";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }
 function hapusContact($contact)
 {
 	global $conn;
 	$query="delete from contact where idcontact=$contact";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }
 function hapusAdmin($admin)
 {
	global $conn;
	$query="delete from admin where iduser=$admin";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
 }
 
 function tambahProducts($data)
 {
 	global $conn;
	 //$title_beranda=htmlspecialchars($data["title_beranda"]);	 
	 $product_code=htmlspecialchars($data["product_code"]);
	 $product_name=htmlspecialchars($data["product_name"]);
	 //$product_img_name=htmlspecialchars($data["product_img_name"]);
	 $qty=htmlspecialchars($data["qty"]); 
	 $price=htmlspecialchars($data["price"]); 
 	//$berandaa=htmlspecialchars($data["berandaa"]);

	//$gambar=htmlspecialchars($data["gambar"]);

	$product_img_name=upload();
 	if(!$product_img_name)
 	{
 		return false;
 	}

 	$query= "INSERT INTO products (id, product_code, product_name, product_img_name,qty,price)
 				SELECT MAX(id)+1, '$product_code','$product_name', '$product_img_name' ,'$qty','$price' from products";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 }
 

 function query($user)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $user);
 	$row=null;
 	while($data=mysqli_fetch_array($exe))
 	{
 		$row[]=$data;
 	}
 	return $row;
 }
 function query2($admin)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $admin);
 	$row=null;
 	while($data=mysqli_fetch_array($exe)){
 		$row[]=$data;
 	}
 	return $row;
 }
 function query3($products)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $products);
 	$row=null;
 	while($data=mysqli_fetch_array($exe)){
 		$row[]=$data;
 	}
 	return $row;
 }
 function query4($orders)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $orders);
 	$row=null;
 	while($data=mysqli_fetch_array($exe)){
 		$row[]=$data;
 	}
 	return $row;
 }
 function query5($ocontact)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $contact);
 	$row=null;
 	while($data=mysqli_fetch_array($exe)){
 		$row[]=$data;
 	}
 	return $row;
 }
 function register($data)
 {
 	global $conn;
 	$name=htmlspecialchars($data['name']);
 	$username = strtolower(stripcslashes($data['username']));
 	$email=htmlspecialchars($data['email']);
 	$password = mysqli_real_escape_string($conn, $data['password']);
 	$password2 = mysqli_real_escape_string($conn, $data['password2']);
 	//cek username
 	$result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

 	//cek kondisi line 175 bernilai true
 	
 	if(mysqli_fetch_assoc($result)) 
 	{
 		echo 
 		"
 			<script>
 				alert('username invalid');
 			</script>
 		";
 		//agar proses insert gagal
 		return false;
 	}
 	//cek konfirmasi password
 	if ($password !== $password2) 
 	{
 		echo 
 		"
 			<script>
 				alert('password invalid');
 			</script>
 		";
 		return false;
 	}
 	//enkripsi password
 		//$password = md5($password);
 		$password = password_hash($password, PASSWORD_DEFAULT);
 		//var_dump($password);
 		
 	//tambahkan user baru ke database
 	mysqli_query($conn, "INSERT INTO admin VALUES('','$name', '$username','$email' ,'$password','$password2')");

 	return mysqli_affected_rows($conn);
 }

function upload(){
 	$nama_file =$_FILES['product_img_name']['name'];
 	$ukuran_file =$_FILES['product_img_name']['size'];
 	$error =$_FILES['product_img_name']['error'];
 	$tmpfile =$_FILES['product_img_name']['tmp_name'];

 	if($error===4){
 		echo "
 			<script>
 			alert('Tidak ada gambar yang diupload');
 			</script>
 		";
 		return false;
 	}
 	$jenis_gambar =['jpg','jpeg','gif','png'];
 	$pecah_gambar =explode('.', $nama_file);
 	$pecah_gambar =strtolower(end($pecah_gambar));

 	$namafilebaru=uniqid();
 	$namafilebaru .= '.';
 	$namafilebaru .= $pecah_gambar;
 	$nama_file = $namafilebaru;
 	if(!in_array($pecah_gambar,$jenis_gambar)){
 		echo "
 			<script>
 			alert('Yang anda upload bukan file gambar');
 			</script>
 		";
 		return false;
 	}
 	if($ukuran_file>10000000){
 		echo "
 			<script>
 			alert('Ukuran gambar terlalu besar');
 			</script>
 		";
 		return false;	
 	}
 	move_uploaded_file($tmpfile, 'img/'. $nama_file);
 	return $nama_file;
 }
  
 function cariUser($keyword){
 	$sql="SELECT *FROM users
 	where 
 	id LIKE '%$keyword' OR
 	fname LIKE '%$keyword' OR
 	lname LIKE '%$keyword' OR
 	address LIKE '%$keyword' OR
	city LIKE '%$keyword' OR
	pin LIKE '%$keyword' OR
	email LIKE '%$keyword' 
 	";
 	return query ($sql); 
 }
 function cariAdmin($keyword){
 	$sql="SELECT *FROM admin
 	where 
 	iduser LIKE '%$keyword' OR
 	name LIKE '%$keyword' OR
 	username LIKE '%$keyword' OR
	email LIKE '%$keyword'
 	";
 	return query ($sql); 
 }
 function cariContact($keyword){
 	$sql="SELECT *FROM contact
 	where 
 	idcontact LIKE '%$keyword' OR
 	fname LIKE '%$keyword' OR
	lname LIKE '%$keyword' OR
 	email LIKE '%$keyword' OR
 	subject LIKE '%$keyword' OR
 	message LIKE '%$keyword'
 	";
 	return query ($sql); 
 }
 function cariOrders($keyword){
 	$sql="SELECT *FROM orders
 	where 
 	id LIKE '%$keyword' OR
	product_code LIKE '%$keyword' OR
	product_name LIKE '%$keyword' OR
	price LIKE '%$keyword' OR
	units LIKE '%$keyword' OR
	total LIKE '%$keyword' OR 
	date LIKE '%$keyword' OR
	email LIKE '%$keyword' OR
	nama LIKE '%$keyword' OR
	alamat LIKE '%$keyword' OR
	kota LIKE '%$keyword' OR
	postcode LIKE '%$keyword' OR
 	notelp LIKE '%$keyword' OR
 	payment Like '%$keyword'
 	";
 	return query ($sql); 
 }
 function cariProducts($keyword){
	$sql="SELECT *FROM orders
	where 
	id LIKE '%$keyword' OR
   product_code LIKE '%$keyword' OR
   product_name LIKE '%$keyword' OR
   product_img_name LIKE '%$keyword' OR
   qty LIKE '%$keyword' OR
   price LIKE '%$keyword'
	";
	return query ($sql); 
}
 function editAdmin($admin){
 	global $conn;
 	$iduser=$admin["iduser"];
 	$name=htmlspecialchars($admin["name"]);
    $username=htmlspecialchars($admin["username"]); 
	$email=htmlspecialchars($admin["email"]);
	$password=htmlspecialchars($admin["password"]);

 	$query="UPDATE admin SET 
 			name ='$name',
 			username ='$username',
 			email='$email',
			password='$password'
 			WHERE iduser=$id";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 
 } 
 
 function editProducts($products){
 	global $conn;
 	$id=$products["id"];
 	//$title_beranda=htmlspecialchars($home["title_beranda"]);
 	$product_code=htmlspecialchars($products["product_code"]);
	 $product_name=htmlspecialchars($products["product_name"]);
	 //$product_img_name=htmlspecialchars($products["product_img_name"]);
	 $qty=htmlspecialchars($products["qty"]);
	 $price=htmlspecialchars($products["price"]);

	 $oldimage=htmlspecialchars($products["oldimage"]);

 	//cek apakah user menekan tombol browse
 	if($_FILES['product_img_name'][error]===4){
 		$product_img_name=$oldimage;
 	}
 	else{
 		$product_img_name=upload();
 	}

 	$query="UPDATE products SET 
 			product_code='$product_code',
 			product_name = '$product_name',
			 product_img_name = '$product_img_name',
			 qty = '$qty',
			 price = '$price'
 			WHERE id=$id";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 
 } 

function upload1(){
 	$nama_file =$_FILES['gambar']['name'];
 	$ukuran_file =$_FILES['gambar']['size'];
 	$error =$_FILES['gambar']['error'];
 	$tmpfile =$_FILES['gambar']['tmp_name'];

 	if($error===4){
 		echo "
 			<script>
 			alert('no one picture an uploaded');
 			</script>
 		";
 		return false;
 	}
 	$jenis_gambar =['jpg','jpeg','gif','png'];
 	$pecah_gambar =explode('.', $nama_file);
 	$pecah_gambar =strtolower(end($pecah_gambar));

 	$namafilebaru=uniqid();
 	$namafilebaru .= '.';
 	$namafilebaru .= $pecah_gambar;
 	$nama_file = $namafilebaru;
 	if(!in_array($pecah_gambar,$jenis_gambar)){
 		echo "
 			<script>
 			alert('this is not picture');
 			</script>
 		";
 		return false;
 	}
 	if($ukuran_file>10000000){
 		echo "
 			<script>
 			alert('Ukuran gambar terlalu besar');
 			</script>
 		";
 		return false;	
 	}
 	move_uploaded_file($tmpfile, 'Lampion/'. $nama_file);
 	return $nama_file;
 }

 /*
 function query1($sql1){
 	global $conn;
 	$exe1=mysqli_query($conn, $sql1);
 	$row1=null;
 	while($data1=mysqli_fetch_array($exe1)){
 		$row1[]=$data1;
 	}
 	return $row1;
 }s

 
 
*/
?>