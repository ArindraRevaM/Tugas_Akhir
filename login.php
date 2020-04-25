<?php 
session_start();
if (isset($_SESSION['username'])) {
	header("location: index.php");
}

 ?>

<html>
<head>
	<title>Form Login</title>
</head>
<center><body bgcolor="DarkOrange">
	<font color="Black">
	<h2>Selamat Datang</h2>
	<h1>Silahkan Login Terlebih Dahulu</h1>
	
	 <br/>
	 <br/>
	 <form action="cek_login.php" method="post" >
	 	<table>
	 		<tr> 
	 			<td>Username</td>
	 			<td>:</td>
	 			<td><input type="text" name="username"></td>
	 		</tr>
	 		<tr>
	 			<td>Password</td>
	 			<td>:</td>
	 			<td><input type="password" name="password"></td>	
	 		</tr>
	 		<tr>
	 			<td></td>
	 			<td></td>
	 			<td><input type="submit" value="login"></td>
	 		</tr>
	 	</table>
	 </form>
	 </font>
</body>
</html>