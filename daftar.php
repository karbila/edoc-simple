<?php  
	include "koneksi.php";
?>

<html>
<head>
<title>Halaman Daftar Anggota</title>
<link rel="stylesheet" href="style.css" type='text/css'>	
</head>
<body>
<div class="top">
<strong class='modul'>MODUL 1</strong>                
</div>
<div id="box-login">
<form action="aksi_daftar.php" method='POST'>
<table>
<tr><td>Nama Lengkap</td>
<td><input type="text" name="inputnama" id='a' value="" placeholder="Isikan Nama Lengkap Anda"></td></tr>
<tr><td>Username</td>
<td><input type="text" name="inputuser" value="" placeholder="Isikan Username Anda"></td></tr>
<tr><td>Password</td>
<td><input type="password" name="inputpass" value="" placeholder="Isikan Password Anda"></td></tr>
<tr><td>Pilih Tipe User Anda</td>
<td>
<select name="level">
<option value="0">Pilih Tipe User Anda</option>
<?php  
$query = mysql_query("SELECT * FROM level");
while ($dt = mysql_fetch_array($query)) {
echo "<option value='$dt[id_level]'>$dt[nama_level]</option>";
}
?>
</select>
</td></tr>
<tr><td colspan='2'><input type="submit" name="daftar" value="Daftar">
<input type="reset" name="kosongi" value="Reset"></td></tr>			
</table>
</form>
<div id="daftar">
<a href="index.php">Ternyata Saya sudah punya Account... :)  Go To Login</a>
</div>		
</div>
</body>
</html>