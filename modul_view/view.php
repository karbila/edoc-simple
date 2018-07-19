<?php 	
			session_start();
			error_reporting(0);

			include "../koneksi.php";
			
			$dok = mysql_query("SELECT * FROM dokumen_pribadi WHERE iddok_pribadi = '$_GET[iddok]'");
			$datadok = mysql_fetch_array($dok);
			$direktori = "../files_pri/";
			$filename = "$datadok[nama_asli_dokpri]";

			if(file_exists($direktori.$filename)){			
				$file_extension = strtolower(substr(strrchr($filename,"."),1));				
		
				if ($file_extension=='php'){
				  	echo "maaf, file tidak bisa diakses....";
					//header('location:../../manajemen-dok.php?mode=md_pribadi&p=dokpri&s=no&m=dokditutup');
				  exit;
				}elseif($datadok['tipe_file']=='video/mp4' || $datadok['tipe_file']=='application/octet-stream'){
					?>
					<html>
					<head>
					<title><?php
					$data = mysql_fetch_array(mysql_query("SELECT nama_asli_dokpri FROM dokumen_pribadi WHERE iddok_pribadi = '$_GET[iddok]'"));		
					$nmlm = $data['nama_asli_dokpri'];
					echo "$nmlm";
					?></title>
					<link rel="stylesheet" href="../style.css">
					<link rel="shortcut icon" href="../favicon.png">
					<script src="../jquery.js"></script>					
					<script src='../bootstrap-dropdown.js'></script>
					<script src='../bootstrap-button.js'></script>
					</head>
					<body>
						<div id="wrapper">
							<div id="content">
								<div id="menu-atas">
									<div id='menu-dalam'>
										<a href='../halaman1.php' class='owner'><i class='icon-white icon-home' style='margin: 5px 5px 5px 0px;'></i><?=$_SESSION['NamaLengkap']?></a>
										<div class='menu-kecil'>
											<ul class='nav'>
												<li><a href='../halaman1.php?menu=dokpri' class='active'>Dokumen Pribadi</a></li>
												<li><a href='../halaman1.php?menu=dokpu'>Dokumen Publik</a></li>
											</ul>	
										</div>
									</div>
									<ul class="nav pull-right">
							        	<li class="dropdown">
							        		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Go To <b class="caret"></b></a>
							        		<ul class="dropdown-menu">
							        			<li><a href="../halaman6.php">Halaman Bersama</a></li>
							        			<li class="divider"></li>
							        			<li><a href="../logout.php">Keluar</a></li>
							        		</ul>
							        	</li>
							        </ul>
								</div>

								<div class='clear'></div>
								<div id='tables'>									
									<?php
										echo "<script type=\"text/javascript\" src=\"../flowplayer-3.1.1.min.js\"></script>					
										";
										echo "<table style=\"border:10px solid #000000;margin: 20px auto;\">
										<tr><td>					
										<a href=\"../files_pri/$datadok[nama_asli_dokpri]\"  
											 style=\"display:block;width:450px;height:350px;\"  
											 id=\"player\"> 
										</a>
										</td></tr>
										</table>";

									?>
									<script>
									flowplayer("player", "../flowplayer-3.1.1.swf", {clip: { buferring: false, autoPlay: true, autoBuffering: false}});
									</script>
									<!-- <video src="../files_pri/<?php echo "$nmlm" ?>" autobuffer autoloop loop controls poster=""></video> -->

								</div>
							</div>
						</div>
					</body>
					</html>

					
					<?php
					exit;
				}elseif($datadok['tipe_file']=='application/pdf'){
					header('Content-type:application/pdf');
					ob_clean();
					flush();
					readfile("$direktori$filename");
					exit;
				}elseif ($datadok['tipe_file']=='text/plain'){
					header('Content-type:text/plain');
					ob_clean();
					flush();
					readfile("$direktori$filename");
					exit;					
				}elseif ($datadok['tipe_file']=='image/gif') {
					header('Content-type:image/gif');
					ob_clean();
					flush();
					readfile("$direktori$filename");
					exit;
				}elseif ($datadok['tipe_file']=='image/png') {
					header('Content-type:image/png');
					ob_clean();
					flush();
					readfile("$direktori$filename");
					exit;
				}elseif ($datadok['tipe_file']=='image/jpeg' || $datadok['tipe_file']=='image/jpg' ) {
					header('Content-type:image/jpeg');
					ob_clean();
					flush();
					readfile("$direktori$filename");
					exit;
				}elseif ($datadok['tipe_file']=='audio/mp3') {
					?>
					<html>
					<head>
					<title>
					<?php
						$data = mysql_fetch_array(mysql_query("SELECT nama_asli_dokpri, ukuran_file FROM dokumen_pribadi WHERE iddok_pribadi = '$_GET[iddok]'"));		
						$nmlm = $data['nama_asli_dokpri'];
						include "../fungsi_konversi_bit.php";
						//echo "$nmlm";
					?>
					</title>
					<link rel="stylesheet" href="../style.css">
					<link rel="shortcut icon" href="../favicon.png">
					<script src="../jquery.js"></script>					
					<script src='../bootstrap-dropdown.js'></script>
					<script src='../bootstrap-button.js'></script>
					</head>
					<body>
						<div id="wrapper">
							<div id="content">
								<div id="menu-atas">
									<div id='menu-dalam'>
										<a href='../halaman1.php' class='owner'><i class='icon-white icon-home' style='margin: 5px 5px 5px 0px;'></i><?=$_SESSION['NamaLengkap']?></a>
										<div class='menu-kecil'>
											<ul class='nav'>
												<li><a href='../halaman1.php?menu=dokpri' class='active'>Dokumen Pribadi</a></li>
												<li><a href='../halaman1.php?menu=dokpu'>Dokumen Publik</a></li>
											</ul>	
										</div>
									</div>
									<ul class="nav pull-right">
							        	<li class="dropdown">
							        		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Go To <b class="caret"></b></a>
							        		<ul class="dropdown-menu">
							        			<li><a href="../halaman6.php">Halaman Bersama</a></li>
							        			<li class="divider"></li>
							        			<li><a href="../logout.php">Keluar</a></li>
							        		</ul>
							        	</li>
							        </ul>
								</div>

								<div class='clear'></div>
								<div id='tables'>
									<div class="alert-info" style='margin: 5px;'>
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Nama Audio: </strong><?php echo "$nmlm"; ?><br><strong>Ukuran: </strong><?php 
											$t3 = bytesToSize($data['ukuran_file']);
											echo "$t3";
										 ?>
									</div>
									<div class="box-playlist">										
								<audio src="../files_pri/<?php echo "$nmlm"; ?>" controls='controls'></audio>

								
									</div>

								</div>
							</div>
						</div>
					</body>
					</html>
					<?php
					exit;
				}
				else{		  
				  header("Content-Type: octet/stream");
				  header("Pragma: private"); 
				  header("Expires: 0");
				  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
				  header("Cache-Control: private",false); 
				  header("Content-Type: $ctype");
				  header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
				  header("Content-Transfer-Encoding: binary");
				  header("Content-Length: ".filesize($direktori.$filename));
				  readfile("$direktori$filename");
				  exit();   
				  //echo "$file_extension";
				}
			}else{		  
				echo "file hilang...<br>$direktori$filename";
				//header('location:../../manajemen-dok.php?mode=md_pribadi&p=dokpri&s=no&m=dokumenhilang');
				exit;
			}		
 ?>