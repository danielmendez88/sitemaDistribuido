<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="row">
		<div class="col-sm-6">
			<?php echo $form->label($model,'idproductos'); ?>
			<?php echo $form->textField($model,'idproductos', array('class' => 'form-control')); ?>
		</div>

		<div class="col-sm-6">
			<?php echo $form->label($model,'nombreproducto'); ?>
			<?php echo $form->textField($model,'nombreproducto',array('size'=>60,'maxlength'=>128, 'class' => 'form-control')); ?>
		</div>		
	</div>

	<div class="row">
		<div class="col-sm-6">
			<?php echo $form->label($model,'precio'); ?>
			<?php echo $form->textField($model,'precio',array('size'=>60,'maxlength'=>128, 'class' => 'form-control')); ?>
		</div>
		<br>
		<div class="col-sm-6 buttons">
			<?php echo CHtml::submitButton('Buscar', array("class" => "btn btn-primary btn-large")); ?>
		</div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->