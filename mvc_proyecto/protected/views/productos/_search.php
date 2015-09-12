<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
//formulario de busqueda que envia y obtiene los parametros directamente del controlador ProductosController
// este formulario nos da los parametros en sus inputs los cuales son indexados por su metodo el cual está especificado 
// en el widget beginWidget pasando un parametro de la clase CActiveForm
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