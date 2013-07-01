<?php
$this->breadcrumbs=array(
	'Media'=>array('media/video'),
	'Videos',
);?>
<h1>Videos</h1>

<table border='1'>
		<!-- <thead>
			<td>Pic</td>
			<td>Title</td>
			<td>Duration</td>
			<td>Description</td>
		</thead> -->
		<tbody>
			<?php 
			for($i = 1; $i <= count($data); $i++) {
				echo "<tr>
					<td rowspan='3' width='250px' height='250px'><center><a href= '/../Coraline.avi'><img src='".$data[$i]['vid_cover_src']."'></a></center</td>
					<td><b>".$data[$i]['vid_name']."</b></td>
				</tr>
				<tr>
					<td>".$data[$i]['duration']."</td>
				</tr>
				<tr>
					<td>".$data[$i]['vid_desc']."</td>
				</tr>";
			}
			?>
		</tbody>
</table>

<!-- <p><?php echo CHtml::link("Hello message", array('message/helloWorld')); ?></p> -->