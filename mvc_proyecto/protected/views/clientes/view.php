<?php
/* @var $this ClientesController */
/* @var $model Clientes */
//vista principal a la que envia el actionView del controlador de clientes el cual envía el parametro para cargarlo 
//el widget y así con la variable $model poder acceder a los datos en forma de una tabla
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Agregar Clientes', 'url'=>array('create')),
	array('label'=>'Modificar Clientes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que deseas eliminar el cliente?')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Cliente Agregado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'htmlOptions'=>array("class" => "table table-striped"),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'razonsocial',
	),
)); ?>
