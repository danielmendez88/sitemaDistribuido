<?php
/* @var $this ClienteCompraController */
/* @var $data ClienteCompra */
//enviar generamos un listado desde la tabla de ClienteCompra el cual hace interacción con el controlador y se ejecuta por el numero de veces
// que registros haya en la tabla
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productos_idproductos')); ?>:</b>
	<?php echo CHtml::encode($data->productos_idproductos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</b>
	<?php echo CHtml::encode($data->subtotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id_cliente); ?>
	<br />


</div>