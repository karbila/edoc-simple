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

<?php  
	if(!isset($_SESSION['idLevel'])){
		echo "<div id='wrapper2'><h2>Hayooo..... Anda Belum Login<br>Login Dulu Brow....</h2>";
		echo "<br><a href='index.php'>Login disini</a></div>";
	}elseif($_SESSION['idLevel']!='5'){
		echo "<div id='wrapper2'><h1>Maaf, Ini bukan Halaman Anda</h1><br>Untuk kembali halaman Hak Akses Anda, <a href='halaman$_SESSION[idLevel].php'>Klik disini</a></div>";
	}else{
		?>		
	<div id="wrapper">
	<div id="content">
	<h1 id='judul'>Selamat Datang <?php echo "$_SESSION[NamaLengkap]"; ?></h1>
	<h3 id='login-sbg'>Anda Login sebagai <?php echo "$_SESSION[Level]"; ?></h3>		
	<h3 id='link-go'>Klik Link di bawah ini untuk mengetahui Hak Akses Anda</br></h3>
	<div class='menu'>
	<?php  
	for ($i=1; $i<=6 ; $i++) {			
	echo "<a href='halaman$i.php' class='link-bunder'><span class='bunder'>$i</span></a>";
	}
	?>
	</div>
	<div id="foot">
	<a href="logout.php" class='link-bunder-out'>Out</a>
	</div>
	</div>
	</div>
</body>
</html>
<?php
}
?>