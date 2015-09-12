<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/*
	se genera un breadcrumb el cual es un widget que indexa un indice de seguimiento de la aplicación a través de la vista en la que se encuentra
	para que al usuario se le haga más fácil la experiencia de navegar en ese escenario
*/
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Agregar Clientes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Clientes</h1>
<!--aqui se cargan los enlaces alternos en los formularios-->

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
	//widget que permite generar una tabla personalizada de datos que tiene a su cargo el modelo de dicha vista en este caso
	// los datos son cargados de la tabla usuario
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clientes-grid',
	'itemsCssClass' => 'table table-striped',
	'pager' => array("htmlOptions" => array("class" => "pager")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'apellido',
		'razonsocial',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
