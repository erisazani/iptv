<?php
/* @var $this ProfileController */
$this->pageTitle=Yii::app()->name . ' - HotelProfile';
$this->breadcrumbs=array(
	'Profile',
);
?>

<html>
	<head>
	</head>
	<body>
		<p>
			<h1>Profile</h1>
			<?php
				echo $profile['profile'];
			?>

			Edit.
		</p>
	</body>
</html>

