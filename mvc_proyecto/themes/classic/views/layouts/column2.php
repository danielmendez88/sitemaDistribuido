<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php
					$this->beginWidget('zii.widgets.CPortlet', array(
						'title'=>'Operaciones',
					));
					$this->widget('zii.widgets.CMenu', array(
						'items'=>$this->menu,
						'htmlOptions'=>array('class'=>'nav nav-tabs'),
					));
					$this->endWidget();
				?>				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div><!-- content -->
<?php $this->endContent(); ?>