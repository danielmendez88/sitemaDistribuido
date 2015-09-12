<?php
/* @var $this ClienteCompraController */
/* @var $model ClienteCompra */

$this->breadcrumbs=array(
	'Administrar Compras'=>array('index'),
	'Administrar',
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

<h1>Compras por cliente</h1>


<div class="search-form" style="display:active">
<?php $this->renderPartial('_searchadvanced',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cliente-compra-grid',
	'itemsCssClass' => 'table table-striped',
	'pager' => array("htmlOptions" => array("class" => "pager")),
	'dataProvider'=>$model->searchadvanced(),
	'filter'=>$model,
	'columns'=>array(
		'productos_idproductos',
		'cantidad',
		'subtotal',
		'cliente_idcliente',
		array(
			'class'=>'CButtonColumn','buttons'=>array(
                        'delete' => array(
                                'none',
                        ),
                ),
   
		),
	),
)); ?>
