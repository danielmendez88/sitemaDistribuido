<?php 
	/**
	* 
	*/
	class Producto extends CActiveRecord
	{
		private $connection;

		public function __construct()
		{
			# code...
			$this->connection = new CDbConnection(Yii::app()->db->connectionString, Yii::app()->db->username, Yii::app()->db->password);

			$this->connection->active = true;
		}

		public static function model($className=__CLASS__)
		{
			# code... retorna toda la clase que vine del core de yii
			return parent::model($className);
		}

		public function tableName()
		{
			# code...
			return "productos";
		}
		public function getProductos()
		{
			//tambien solo retornamos el nombre de la tabla para hacerlo más sencillo
			//return "productos";
			# code...
			$sql = "SELECT  idproductos,  nombreproducto, precio,  existencia,  codigo,  descripcion  FROM  productos ";
			$dataReader = $this->connection->createCommand($sql)->query();

			//creamos una variable para recibir los datos y nos retorna el arreglo de datos
			$rows = $this->connection->createCommand($sql)->queryAll();
			return $rows;
		}

	}
 ?>