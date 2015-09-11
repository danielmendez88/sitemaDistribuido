<?php
/* @var $this ClienteCompraController */
/* @var $model ClienteCompra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id', array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productos_idproductos'); ?>
		<?php echo $form->textField($model,'productos_idproductos',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtotal'); ?>
		<?php echo $form->textField($model,'subtotal', array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_idcliente'); ?>
		<?php echo $form->textField($model,'cliente_idcliente', array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
	</div>
<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar', array("class" => "btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->