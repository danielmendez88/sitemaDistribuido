<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Producto'=>array('index'),
	$model->idproductos,
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Agregar Producto', 'url'=>array('add')),
	array('label'=>'Actualizar Producto', 'url'=>array('update', 'id'=>$model->idproductos)),
	array('label'=>'Eliminar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproductos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>Producto #<?php echo $model->idproductos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class" => "table table-striped"),
	'attributes'=>array(
		'idproductos',
		'nombreproducto',
		'precio',
		'existencia',
		'codigo',
		'descripcion',
	),
)); ?>
