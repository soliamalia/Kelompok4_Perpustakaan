<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" > <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Soli's Library</title>
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
				<div id="logo"><img src="<?php echo base_url();?>img/sman2.png" height="130" width="130" /></div>
			</header>
			<!-- ENDS HEADER -->
			
			<!-- NAV -->
			<nav class="cf">
				<ul id="nav" class="sf-menu">
					<li class="current-menu-item"><a href="<?php echo base_url();?>index.php/csiswa/hal_siswa">HOME</a></li>
					<li><a href="<?php echo base_url();?>index.php/csiswa/tampilpeminjaman">PEMINJAMAN</a></li>
					<li><a href="<?php echo base_url();?>index.php/clogin/logout">LOG OUT</a></li>
				</ul>
			</nav>
			<!-- ENDS NAV -->
			
			
			<!-- MAIN -->
			<div id="main" class="cf">
			
				<div class="line-heading">
					<center><h2>Peminjaman</h2></center>
				</div>
				<table border="0" align="center">
	<form method="post" action="<?php echo base_url();?>index.php/csiswa/tambahpeminjaman">
	<input type='hidden' name='kartu_barkode' value='<?php echo $this->uri->segment(3);?>'>
<input type='hidden' name='peminjam_kode' value='<?php echo $this->uri->segment(3);?>'>
	<?php
		$today="SELECT DATE(NOW()) AS 'sekarang'";
					//INPUT ID NOTA
					foreach($query->result() as $row)
					{
					$id=$row->last;
					}
					// baca nomor urut transaksi dari id transaksi terakhir
$lastNoUrut = substr($id,2,5);
 
// nomor urut ditambah 1
$nextNoUrut = $lastNoUrut + 1;
 
// membuat format nomor transaksi berikutnya
$nextid = 'KP'.sprintf('%03s', $nextNoUrut);
					
					echo "<tr>
							<td><input type='hidden' name='peminjaman_kode' value='$nextid' readonly></td>
						</tr>";		?>
	<tr>
		<td>Kode Peminjam</td>
		<td>:</td>
		<td><input type="hidden" name="peminjam_kode"  value='<?php echo $peminjam=$this->uri->segment(3);?>'>
		<?php echo $a=$this->uri->segment(3);?></td>
	</tr>
	<tr>
		<td>Tanggal Peminjaman</td>
		<td>:</td>
		<td><input type="hidden" name="peminjaman_tgl" value="<?php date_default_timezone_set('Asia/Krasnoyarsk');
		echo date("Y-m-d"); ?>">
		<?php date_default_timezone_set('Asia/Krasnoyarsk');
		echo date("Y-m-d"); ?></td>
	</tr>
	<tr>
		<td>Tanggal Kembali </td>
		<td>: </td>
		<td><input type="hidden" name="peminjaman_tglhrskembali" value='<?php date_default_timezone_set('Asia/Krasnoyarsk');
		$tgl_akhir= mktime (0,0,0,date ("m"), date("d")+7,date("Y"));
		echo date ("Y-m-d",$tgl_akhir);?>'>
		<?php date_default_timezone_set('Asia/Krasnoyarsk');
		echo date ("Y-m-d",$tgl_akhir);?></td>
	</tr>
	
	<tr>
		<td>Buku</td>
		<td>:</td>
		<td><select name="buku_kode" ><?php
	  $q=$this->db->get("buku");
			foreach($q->result() as $row)
			{
				echo"<option value = '".$row->buku_kode."'>".$row->buku_kode." - ".$row->buku_judul."</option>";
			}
		?></td>
	</tr>
	<tr>
		<td colspan="3"><br>
		<input type="submit" value="Pinjam">
		<input type="reset" value="Back" onClick="self.history.back()">
				 
		</td>
	</tr>
</table><br>
				
			<!-- ENDS MAIN -->
				
			<!-- FOOTER -->
			<div class="footer-divider"></div>
			<footer class="cf">
				Copyright (c) 2013 Soli Amalia | XII RPL 1 | @RPLWAN.
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
