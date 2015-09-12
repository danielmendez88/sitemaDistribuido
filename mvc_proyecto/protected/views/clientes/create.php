<?php
/* @var $this ClientesController */
/* @var $model Clientes */

// primera vista que se indexa con la vista _form 
// la cual solo contiene el formulario y está contiene el contenido restante de la vista.
// se crea así ya que Yii considera que es mejor dividir las vistas en widget y formularios.

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