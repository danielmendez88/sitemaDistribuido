<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Agregar Clientes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>