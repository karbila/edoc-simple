
<html>
<head>
<title>Halaman Login</title>
<link rel="stylesheet" href="style.css" type='text/css'>
</head>
<body>
<div class="top">
<strong class='modul'>MODUL 1</strong>                
</div>
<div id="box-login">
<form action="validasi.php" method='POST'>
<table>
<tr><td>Username</td>
<td><input type="text" name="inputuser" value="" placeholder="Isikan Username Anda"></td></tr>
<tr><td>Password</td>
<td><input type="password" name="inputpass" value="" placeholder="Isikan Password Anda"></td></tr>
<tr><td colspan='2'>
	<input type="reset" name="kosongi" value="Reset">
	<input type="submit" name="masuk" value="Login">
	</td>
</tr>			
</table>
</form>
<div id='daftar'>
<a href="daftar.php">Daftar Disini...</a>
</div>
</div>
</body>
</html>