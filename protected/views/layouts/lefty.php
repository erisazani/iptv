<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span-6" style="margin-left:20px; border-right: 1px solid #DDD;">
		<p>
			<h2>Sidebar</h2>
			<div id="content">
				lalala
			</div>
			<div id="content"> 
				yeyeye
			</div>
			<div id="content">
				yayaya
			</div>
			<div id="content">
				<?php echo CHtml::button("Hello", array('message/helloWorld')); ?>
			</div>
		</p>
		
	</div>
	<div id="content" class="span-16">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>
