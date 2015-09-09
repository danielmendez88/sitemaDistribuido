<?php
/* @var $this ClienteCompraController */
/* @var $model ClienteCompra */

$this->breadcrumbs=array(
	'Realizar compra'=>array('index'),
	'Comprar',
);

$this->menu=array(
	array('label'=>'Total de Compras', 'url'=>array('index')),
	
);
?>

<h1>Realizar Compra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>