<?php
/* @var $this ProductoController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>
<?php //echo 	CHtml::link("Volver Atrás", Yii::app()->request->baseUrl."/productos", array("title" => "Volver Atrás"));
	//arreglo que se genera del widget menu el cual nos permite generar un indice personalizado.
		$this->menu=array(
			array('label'=>'Volver Atrás', 'url'=>array('index')),
		);
 ?>

<!--generar formulario-->
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	// Nota: Cuando se habilita la validación ajax , asegúrese de que el correspondiente
	// Acción del controlador se encarga de la validación ajax correctamente.
	// No es una llamada a performAjaxValidation ( ) comentó en el código del controlador generado.
	// Ver documentación de la clase de CActiveForm para más detalles sobre esto.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model, null, null, array('class'=>"alert alert-danger")) ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'nombreproducto'); ?>
		<?php echo $form->textField($model,'nombreproducto', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombreproducto'); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model, 'precio'); ?>
		<?php echo $form->textField($model, 'precio', array('class'=>'form-control')); ?>
		<?php echo $form->error($model, 'precio');?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model, 'existencia'); ?>
		<?php echo $form->textField($model, 'existencia', array('class' => 'form-control')); ?>
		<?php echo $form->error($model, 'existencia'); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model, 'codigo'); ?>
		<?php echo $form->textField($model, 'codigo', array('class'=> 'form-control')); ?>
		<?php echo $form->error($model, 'codigo'); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model, 'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array("class"=>"form-control",'rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
	<br>
	<div class="buttons">
	 <?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array("class" => "btn btn-primary btn-large")); ?>
	</div>
<?php $this->endWidget(); ?>
</div>