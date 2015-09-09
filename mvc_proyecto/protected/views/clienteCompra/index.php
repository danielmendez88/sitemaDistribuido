<?php
/* @var $this ClienteCompraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Compras Realizadas',
);

$this->menu=array(
	array('label'=>'Realizar Compra', 'url'=>array('create')),
	array('label'=>'Administrar Compras', 'url'=>array('admin')),
);
?>

<h1>Compras Realizadas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
