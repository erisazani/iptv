<?php
$this->breadcrumbs=array(
	'Media'=>array('media/TV'),
	'TVs',
);?>
<h1>TV</h1>

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
					<td rowspan='2' width='400px'><center><a href= '".$data[$i]['tv_src']."'><img src='".$data[$i]['tv_logo_src']."'></a></center</td>
					<td><b>".$data[$i]['tv_name']."</b></td>
				</tr>
				<tr>
					<td>".$data[$i]['tv_desc']."</td>
				</tr>";
			}
			?>
		</tbody>
</table>

<!-- <p><?php echo CHtml::link("Hello message", array('message/helloWorld')); ?></p> -->