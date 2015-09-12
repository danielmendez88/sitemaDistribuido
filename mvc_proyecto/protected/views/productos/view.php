<?php
/* @var $this ProductosController */
/* @var $model Productos */
//vista principal a la que envia el actionView del controlador de ProductosController el cual envía el parametro para cargarlo 
//el widget y así con la variable $model poder acceder a los datos en forma de una tabla Productos
$this->breadcrumbs=array(
	'Producto'=>array('index'),
	$model->idproductos,
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Agregar Producto', 'url'=>array('add')),
	array('label'=>'Actualizar Producto', 'url'=>array('update', 'id'=>$model->idproductos)),
	array('label'=>'Eliminar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproductos),'confirm'=>'¿Estas seguro que deseas eliminar el producto?')),
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
