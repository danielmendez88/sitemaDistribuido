<?php
/* @var $this ClientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes',
);

$this->menu=array(
	array('label'=>'Agregar Clientes', 'url'=>array('create')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'pager' => array("htmlOptions"=> array("class"=>"pager")),
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
