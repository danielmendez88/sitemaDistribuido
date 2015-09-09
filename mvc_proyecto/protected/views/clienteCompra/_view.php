<?php
/* @var $this ClienteCompraController */
/* @var $data ClienteCompra */
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