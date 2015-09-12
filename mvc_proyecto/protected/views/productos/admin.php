<?php
/* @var $this ProductosController */
/* @var $model Productos */
// la ventaja del framework es que podemos utilizar sus funciones y metodos para poder trabajar de mejor manera con los datos y funciones
// de otros lenguages como registerScript el cúal también puede pasarse un parametro que nos envia directamente al controlador
// luuego se ejecuta un script de js el cual tiene como objetivo hacer un toggle sobre el boton con la etiqueta search
//luego en el submit envia los parametos a un widget que solo muestra los valores que contengan ese parametro exacto.
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