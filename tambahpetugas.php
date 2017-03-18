<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" > <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>SMAN 2 Bandung Library</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		
		<!-- CSS -->
		<link href="<?php echo base_url();?>'http://fonts.googleapis.com/css?family=Arvo:400' rel='stylesheet' type='text/css'">
		<link href="<?php echo base_url();?>'http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'">
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css">
		
		<script src="<?php echo base_url();?>js/modernizr.js"></script>
	</head>
	<body>
	
		
		<!-- WRAPPER -->
		<div class="wrapper">
		
			<!-- HEADER -->
			<header class="cf">
				<div id="logo"><img src="<?php echo base_url();?>img/sman2.png" height="130" width="130"></div>
			</header>
			<!-- ENDS HEADER -->
			
			<!-- NAV -->
			<nav class="cf">
				<ul id="nav" class="sf-menu">
					<li><a href="<?php echo base_url();?>index.php/cadmin/hal_admin">HOME</a></li>
					<li class="current-menu-item"><a href="<?php echo base_url();?>index.php/cadmin/tampil_petugas">DATA PETUGAS</a></li>
					<li><a href="<?php echo base_url();?>index.php/clogin/logout">LOG OUT</a></li>
					
				</ul>
			</nav>
			<!-- ENDS NAV -->
			
			
			<!-- MAIN -->
			<div id="main" class="cf">
			
				<div class="line-heading">
					<center><h2>Tambah Petugas</h2></center>
				</div>
				<?php
$today="SELECT DATE(NOW()) AS 'sekarang'";
				
				echo "<table>";
					foreach($query->result() as $row)
					{
					$petugas_kode=$row->last;
					}
					
$lastNoUrut = substr($petugas_kode,2,3);
// nomor urut ditambah 1
$nextNoUrut = $lastNoUrut + 1;
// membuat format nomor transaksi berikutnya
$nextid = 'PT'.sprintf('%03s', $nextNoUrut);
					
					?>
			<form method="post" action="<?php echo base_url()?>index.php/cadmin/tambahpetugas">
			<table border="0" align="center">
			<?php
			echo "<tr>
				<td>Kode Petugas</td>
				<td><input type='text' name='petugas_kode' value='$nextid' readonly></td>
			</tr>" ;
			?>
			<tr>
				<td>Nama Petugas</td>
				<td><input type="text" name="petugas_nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="sumbit" value="Simpan">
				<input type="reset" value="Reset"></td>
			</tr>
			</table>
				
			<!-- ENDS MAIN -->
				
			<!-- FOOTER -->
			<div class="footer-divider"></div>
			<footer class="cf">
				Copyright (c) 2017 | By: Hathaway Corps.
			</footer>
			<!-- ENDS FOOTER -->
		
		</div>
		<!-- ENDS WRAPPER -->
		
		<!-- JS -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
		<script src="js/custom.js"></script>
		
		<!-- superfish -->
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<script src="js/css3-mediaqueries.js"></script>
		
		<script src="js/nivoslider.js"></script>
		<script src="js/tabs.js"></script>
		
	
		<!-- ENDS JS -->
	</body>
</html>
