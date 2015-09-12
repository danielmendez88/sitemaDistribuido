<?php
/* @var $this ClienteCompraController */
/* @var $data ClienteCompra */
//enviar generamos un listado desde la tabla de ClienteCompra el cual hace interacción con el controlador y se ejecuta por el numero de veces
// que registros haya en la tabla
?>
<div class="list-group">
  <a href="#" class="list-group-item ">
    <h4 class="list-group-item-heading"><?php echo CHtml::encode($data->getAttributeLabel('productos_idproductos')); ?>:</h4>
    <p class="list-group-item-text"><?php echo CHtml::encode($data->productos_idproductos); ?></p>
    <h4 class="list-group-item-heading"><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</h4>
    <p class="list-group-item-text"><?php echo CHtml::encode($data->cantidad); ?></p>
    <h4 class="list-group-item-heading"><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</h4>
    <p class="list-group-item-text"><?php echo CHtml::encode($data->subtotal); ?></p>
	<h4 class="list-group-item-heading"><?php echo CHtml::encode($data->getAttributeLabel('cliente_idcliente')); ?>:</h4>
    <p class="list-group-item-text"><?php echo CHtml::encode($data->cliente_idcliente); ?></p>
  </a>
</div>