<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	// Nota: Cuando se habilita la validación ajax , asegúrese de que el correspondiente
	// Acción del controlador se encarga de la validación ajax correctamente.
	// No es una llamada a performAjaxValidation ( ) comentó en el código del controlador generado.
	// Ver documentación de la clase de CActiveForm para más detalles sobre esto.
	// a partir de la clase CActiveForm se puede contruir un formulario personalizado obteniendo de esta clase solo los parametos 
	// que han sido pasados a traves de la clase CAcviteRecord dada el controlador al cual se direccione
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model, null, null, array('class'=>"alert alert-danger")); ?>

	<div >
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'razonsocial'); ?>
	</div>
	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array("class" => "btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->