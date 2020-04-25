<?php 
session_start();

include 'koneksi.php';

$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$sql = mysqli_query($connect,"SELECT * FROM login WHERE username='".$username."' AND password='".$password."'");

$data = mysqli_fetch_array($sql);

if (! empty($data)) {
	$_SESSION['username'] = $data['username'];
	setcookie("message","delete",time()-1);
	header("location:index.php");
}else{
	setcookie("message","Maaf, username atau password salah",time()+3600);
	header("location:login.php");
}
 ?>