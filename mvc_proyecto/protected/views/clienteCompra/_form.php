<?php
/* @var $this ClienteCompraController */
/* @var $model ClienteCompra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-compra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Producto *'); ?>
		<?php echo $form->dropDownList($model, 'productos_idproductos', Productos::items(1)); ?>
		<?php echo $form->error($model,'productos_idproductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtotal'); ?>
		<?php echo $form->textField($model,'subtotal',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'subtotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cliente *'); ?>
		<?php echo $form->dropDownList($model, 'id', Clientes::items(1)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Comprar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->