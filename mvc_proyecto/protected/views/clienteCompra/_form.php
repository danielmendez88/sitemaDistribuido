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

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Producto*'); ?>
		<?php echo $form->dropDownList($model, 'productos_idproductos', Productos::items(1), array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'productos_idproductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad', array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtotal'); ?>
		<?php echo $form->textField($model,'subtotal', array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'subtotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cliente*'); ?>
		<?php echo $form->dropDownList($model, 'cliente_idcliente', Clientes::items(1), array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'cliente_idcliente'); ?>
	</div>
<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Comprar' : 'Save', array("class" => "btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->