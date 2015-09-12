<?php
/* @var $this ClienteCompraController */
/* @var $model ClienteCompra */

$this->breadcrumbs=array(
	'Administrar Compras'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Total de Compras', 'url'=>array('index')),
	array('label'=>'Realizar Compra', 'url'=>array('create')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-compra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Compras</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cliente-compra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'productos_idproductos',
		'cantidad',
		'subtotal',
		'cliente_idcliente',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
