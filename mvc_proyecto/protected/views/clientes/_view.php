<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>
<div class="list-group">
  <a href="#" class="list-group-item ">
    <h4 class="list-group-item-heading"><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</h4>
    <p class="list-group-item-text"><?php echo CHtml::encode($data->nombre); ?></p>
    <h4 class="list-group-item-heading"><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</h4>
    <p class="list-group-item-text"><?php echo CHtml::encode($data->apellido); ?></p>
    <h4 class="list-group-item-heading"><?php echo CHtml::encode($data->getAttributeLabel('razonsocial')); ?>:</h4>
    <p class="list-group-item-text"><?php echo CHtml::encode($data->razonsocial); ?></p>
  </a>
</div>