<html>

<title>
</title>

<head>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
	 <!-- tambahin php untuk cek siapa yang login -->
	 <!-- status : DONE -->
	<?php
		if(Yii::app()->user->id !== "orderadmin") { 
	?>
		<p align = "center">
			<font size="14px">Welcome, <?php echo Yii::app()->user->id; ?></font> <br />
		</p>
		<div id="info_icon">
			<center><a href = "/iptv/index.php?r=profile/info"><img src = "images/info_icon.png"></a></center>
			<br /><p align="center">Profil</p>
		</div>
		<div id="tv_icon">
			<center><a href = "/iptv/index.php?r=media/tv"><img src = "images/tv_icon.png"></a></center>
			<br /><p align="center">TV</p>
		</div>
		<div id="video_icon">
			<center><a href = "/iptv/index.php?r=media/video"><img src = "images/video_icon.png"></a></center>
			<br /><p align="center">Videos</p>
		</div>
		<div id="library_icon">
			<center><a href = "/iptv/index.php?r=media/library"><img src = "images/library_icon.png"></a></center>
			<br /><p align="center">Library</p>
		</div>

		<!-- tambahin php untuk cek apakah yang login adalah contadmin-->
		<?php
			if(Yii::app()->user->id !== "contadmin") { 
		?>
			<div id="update_icon">
				<center><a href = "/iptv/index.php?r=order/order"><img src = "images/update_icon.png"></a></center>
				<br /><p align="center">Pemesanan</p>
			</div>
		<?php 
			}
		?>
	<?php 
		} else {

		}
	?>

</body>

</html>