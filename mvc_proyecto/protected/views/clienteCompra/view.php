<?php
/* @var $this ClienteCompraController */
/* @var $model ClienteCompra */

$this->breadcrumbs=array(
	'Editar Compra'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Total de Compras', 'url'=>array('index')),
	array('label'=>'Realizar Compra', 'url'=>array('create')),
	array('label'=>'Editar Compra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Compra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro de eliminar la compra?')),
	
);
?>

<h1>Revisar Compra #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'productos_idproductos',
		'cantidad',
		'subtotal',
		'cliente_idcliente',
	),
)); ?>
