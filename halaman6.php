<?php 
	error_reporting(0);
	session_start();
 ?>
<html>
<head>
<title>Halaman <?php echo "$_SESSION[NamaLengkap] - Level $_SESSION[Level]"; ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top">
<strong class='modul'>MODUL 1</strong>                
</div>
<div id="wrapper3">
<?php  
if(!isset($_SESSION['idLevel'])){
	echo "<h2>Hayooo..... Anda Belum Login<br>Login Dulu Brow....</h2>";
	echo "<br><a href='index.php'>Login disini</a>";
}else{
	echo "<h1>Selamat Datang di Halaman Bersama</h1>";	
	echo "Halaman ini dapat diakses oleh semua user<br><br>Nama Lengkap Anda : <strong> $_SESSION[NamaLengkap]</strong><br>";
	echo "<br><a href='halaman$_SESSION[idLevel].php'>Kembali Ke Halaman Anda</a>";
}
?>	
</div>
</body>
</html>