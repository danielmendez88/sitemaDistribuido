<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Procutos'=>array('index'),
	'Agregar Nuevo',
);

/*$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);*/
?>

<h1>Agregar Productos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
