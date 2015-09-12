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

	<br>
	<div class="row">
		<?php echo $form->labelEx($model,'Cliente*'); ?>
		<?php echo $form->dropDownList($model, 'cliente_idcliente', Clientes::items(1), array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'cliente_idcliente'); ?>
	</div>
<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar', array("class" => "btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->