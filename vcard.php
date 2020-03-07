<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="bahan/font-awesome/css/font-awesome.min.css">
	<title>Profil Saya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		a {
			color: inherit;
			text-decoration: none;
		}
		body {
			background-color: #E8E8E8;
			font: 13px/1.5 arial;
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
		}
		.container {
			width: 100%;
			height: 100%;
			border: 0px solid black;
		}
		.background {
			background: url(images/foto/meja.jpg) no-repeat;
			background-size: cover;
			width: 100%;
			height: 350px;
			border: 0px solid;
			opacity: ;
		}
		.utama {
			width: 60%;
			padding: 40px;
			position: relative;
			border: 0px solid;
			margin: 0 auto;
			margin-top: -250px;
			background: white;
			box-shadow: 0px 3px 5px grey;
		}
		.kotak-gambar {
			width: 170px;
			height: 170px;
			border: 0px solid;
			float: left;
			border-radius: 100%;
			margin-top: 45px;
			background: url('images/foto_miring_serius.jpeg') no-repeat center;
			background-size: cover;
		}
		.kotak-gambar img {
			width: auto;
			height: 100%;
			vertical-align: middle;
			display: none;
		}
		.cf:before,
		.cf:after {
			content: '';
			display: table;
		}
		.cf:after {
			clear: both;
		}
		.cf {
			*zoom:1;
		}
		.keterangan {
			width: 74%;
			hegiht: 290px;
			border: 0px solid;
			float: right;
			padding-top: -10px;
		}
		.navi {
			width: 100px%;
			background-color: rgba(255,255,255,0.5);
			height: 40px;
			font-size: 27px;
			color: white;
		}
		.halo {
			width: 	80px;
			height: auto;
		}
		.hal-nama {
			font-size: 27px;
			font-family: tipis2;
		}
		.hal-nama2 {
			font-size: 29px;
			font-family: ques;
			font-weight: bold;
		}
		@font-face {
			font-family: tipis;
			src: url('bahan/font/hero.otf');
		}
		@font-face {
			font-family: tipis2;
			src: url('bahan/font/Hero Light.otf');
		}
		@font-face {
			font-family: ques;
			src: url('bahan/font/quess.otf');
		}
		.provesi {
			font-family: tipis2;
			font-size: 17px;
			letter-spacing: 2px;
			font-weight: bold;
			line-weight: 0px;
		}
		hr {
			border: 0.5px solid grey;
			opacity: 0.2;
		}
		table {
			font-family: tipis;
			font-size: 15px;
		}
		.tbkiri {
			padding-right: 40px;
		}
		.social-media {
			font-family: tipis;
			position: absolute;
			border: 0px solid;
			bottom: 0;
			width: 100%;
			margin-left: -40px;
			height: 40px;
			background-color: #1F7AF7;
			color: white;
			text-transform: center;
		}
		.fa {
			cursor: pointer;
			margin-top: 5px;
			margin-left: 19px;
			margin-right: 19px; 
			text-align: center;
		}
	</style>
</head>
	<body>
		<div class="container cf">
			<div class="background">
				<div class="navi">
					<center><a href="index.php"><span class="fa fa-home">Home</span></a></center>
				</div>
			</div>
			
			<div class="utama cf">
				<div class="kotak-gambar">
					<img src ="images/foto_miring_serius.jpeg">
			</div>
			<div class="keterangan cf">
					<img src ="images/foto/halo.png" alt="" title="" class="halo"><br>
					<span class="hal-nama">
						Saya </span><span class="hal-nama2">M Fawaz Furqon Fajri</span>
						<br>
					<span class="provesi">Pelajar SMK BPI</span>
					<hr>
					<table>
						<tr>
							<td class="tbkiri"><b>Tanggal Lahir</b></td>
							<td>05-September-2003</td>
						</tr>
						<tr class="tr">
							<td class="tbkiri"><b>Alamat</b></td>
							<td>Jalan Kebon Sirih Dalam No.26</td>
						</tr>
						<tr>
							<td class="tbkiri"><b>Email</b></td>
							<td>m.fawaz.furqon@gmail.com</td>
						</tr>
						<tr class="tr">
							<td class="tbkiri"><b>No. HP</b></td>
							<td>0882-1880-7839</td>
						</tr>
						<tr class="tr">
							<td class="tbkiri"><b>Jenis Kelamin</b></td>
							<td>Laki-Laki</td>
						</tr>
						<tr>
							<td class="tbkiri"><b style="padding: 2px 4px 4px 3px; background-color:#1F7AF7; color: 
							white; 	border-radius: 2px;">BARCODE</b></td>
							<td> <img src="images/QRCODECV.png" style="width:100px;height:125px;"> </td>
						</tr>
					</table>
				</div>
				<center>
				<div class="social-media cf">
					<span class="fa fa-facebook"><br><img src="images/delete.png" style="width:10px;height:10px;"></span>
					<span class="fa fa-twitter"><br><img src="images/delete.png" style="width:10px;height:10px;"></span>
					<span class="fa fa-google"><br><img src="images/delete.png" style="width:10px;height:10px;"></span>
					<span class="fa fa-instagram"><br>@zisconium</span>
					<span class="fa fa-youtube"><br><img src="images/delete.png" style="width:10px;height:10px;"></span>
				</center>
			</div>
		</div>
	</body>
</html
