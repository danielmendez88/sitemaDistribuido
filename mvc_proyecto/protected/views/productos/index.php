<?php
$this->pageTitle=Yii::app()->name . ' - Productos';
$this->breadcrumbs=array(
	'Productos',
);
?>
<h1>LISTADOS DE PRODCUTOS</h1>
	<?php 
		foreach ($datos as $key ) : 
			# code...
	?>
		<div class="media">
		  <div class="media-left media-middle">
		    <a href="#">
		      
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><?php echo $key->nombreproducto ?></h4>
		    <?php echo $key->descripcion; ?>
		  </div>
		</div>
	<?php
		endforeach;
	 ?>

