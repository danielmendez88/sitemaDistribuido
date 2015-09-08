<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Agregar Producto', 'url'=>array('add')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Producto</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-grid',
	//generando clases para renderizar la anterior
	'itemsCssClass' => 'table table-bordered table-hover table-striped',
	'pager' => array("htmlOptions" => array("class" => "pager")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idproductos',
		'nombreproducto',
		'precio',
		'existencia',
		'codigo',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>