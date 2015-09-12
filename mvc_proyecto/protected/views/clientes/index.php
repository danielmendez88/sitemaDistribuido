<?php
/* @var $this ClientesController */
/* @var $dataProvider CActiveDataProvider */
//indice principal de la vista y del controlador usuarios
//aqui están alojados también los widgets y solo reenvia a 
// la vista _item que a su vez se indexa con esta vista.

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
