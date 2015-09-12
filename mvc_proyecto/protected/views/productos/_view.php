<?php 
/* @var $this ProductosController */
/* @var $data Productos */
//vista principal de los productos aqui se agrega por un grupo y el widget se encarga de hacer automaticamente la interacción de los
// datos que esten guardados en la tabla producto e imprimiendolos el numero de filas que tenga la tabla a consultar
 ?>
<div class="list-group">
  <a href="#" class="list-group-item ">
    <h4 class="media-heading"><?php echo CHtml::encode($data->nombreproducto); ?></h4>
    <p><?php echo CHtml::encode($data->descripcion); ?></p>
    <h4 class="media-heading">Precio: $<?php echo CHtml::encode($data->precio); ?></h4>
    <p>Existencia: <?php echo CHtml::encode($data->existencia); ?></p>
  </a>
</div>