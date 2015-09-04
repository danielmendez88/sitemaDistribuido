<?php  
	/**
	* 
	*/
	class ProductosController extends Controller
	{
		public function actionIndex()
		{
			$model = new Producto();
			//$datos = $model->getProductos();
			$datos = $model::model()->findAll();
			# code... le pasamos la variable a la vista con el metodo compact
			$this->render("index", array("datos"=>$datos));
		}
	}
?>