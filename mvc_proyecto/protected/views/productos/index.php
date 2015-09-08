<?php
/* @var $this ProductosController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle=Yii::app()->name . ' - Productos';
$this->breadcrumbs=array(
	'Productos',
);
?>
<!--despues del breadcrumb-->
<?php //echo 	CHtml::link("Agregar Producto", Yii::app()->request->baseUrl."/productos/add", array("title" => "Agregar producto")); ?>
<?php //echo 	CHtml::link("Administrar", Yii::app()->request->baseUrl."/productos/admin", array("title" => "Administrar")); 
		$this->menu=array(
			array('label'=>'Agregar Producto', 'url'=>array('add')),
			array('label'=>'Administrar', 'url'=>array('admin')),
		);
?>
<h1>Lista de Productos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	//parametros dataprovider esta variable contiene datos de la base de datos
	//para cambiar la paginación tenemos que setear un componente llamado pager
	'pager' => array("htmlOptions"=> array("class"=>"pager")),
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>