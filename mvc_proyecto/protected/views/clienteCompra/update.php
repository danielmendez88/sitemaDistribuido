<?php
/* @var $this ClienteCompraController */
/* @var $model ClienteCompra */

$this->breadcrumbs=array(
	'Editar Compras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Total de Compras', 'url'=>array('index')),
	array('label'=>'Realizar Compra', 'url'=>array('create')),
	array('label'=>'Revisar Compra', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Editar Compras <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>