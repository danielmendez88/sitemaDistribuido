<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
// CActiveForm y ClientesController generan este formulario donde se cargan los campos de datos 
// y se puede generar la busqueda completamente ya que este viene heredado de un metodo que se encuentra en un widget propio 
// del framework
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id', array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
	</div>
	<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar', array("class" => "btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->