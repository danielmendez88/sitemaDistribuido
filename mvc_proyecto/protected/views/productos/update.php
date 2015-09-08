<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->idproductos=>array('view','id'=>$model->idproductos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Create Productos', 'url'=>array('add')),
	array('label'=>'Ver Productos', 'url'=>array('view', 'id'=>$model->idproductos)),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Productos <?php echo $model->idproductos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>