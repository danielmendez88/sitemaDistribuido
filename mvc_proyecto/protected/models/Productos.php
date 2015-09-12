<?php 
/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $idproductos
 * @property string $nombreproducto
 * @property string $precio
 * @property integer $existencia
 * @property string $codigo
 * @property string $descripcion
 *
 * Las siguientes son las relaciones modelo disponibles :
 * @property Cliente[] $clientes
 */

	class Productos extends CActiveRecord
	{
	 private static $_items=array();
 
		/*private $connection;

		public function __construct()
		{
			# code...
			$this->connection = new CDbConnection(Yii::app()->db->connectionString, Yii::app()->db->username, Yii::app()->db->password);

			$this->connection->active = true;
		}*/

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
	/*	public function getProductos()
		{
			//tambien solo retornamos el nombre de la tabla para hacerlo más sencillo
			//return "productos";
			# code...
			$sql = "SELECT  idproductos,  nombreproducto, precio,  existencia,  codigo,  descripcion  FROM  productos ";
			$dataReader = $this->connection->createCommand($sql)->query();

			//creamos una variable para recibir los datos y nos retorna el arreglo de datos
			$rows = $this->connection->createCommand($sql)->queryAll();
			return $rows;
		}*/
	
	/**
	 * @return array de reglas de validación de atributos
	 */
	public function rules()
	{
		// NOTE: sólo se debe definir reglas para esos atributos que recibirá las entradas del usuario
		return array(
			array('nombreproducto, existencia', 'required'),
			array('existencia', 'numerical', 'integerOnly'=>true),
			array('nombreproducto', 'length', 'max'=>50),
			array('precio', 'length', 'max'=>5),
			array('codigo', 'length', 'max'=>45),
			array('descripcion', 'safe'),
			// la siguiente regla es usada para la busqueda
			array('idproductos, nombreproducto, precio, existencia, codigo, descripcion', 'safe', 'on'=>'search'),
		);
	}

		/**
		 * @return array etiquetas de atributos personalizados (nombre = > etiqueta)
		 */
		public function attributeLabels()
		{
			return array(
				'idproductos' => 'Idproductos',
				'nombreproducto' => 'Nombreproducto',
				'precio' => 'Precio',
				'existencia' => 'Existencia',
				'codigo' => 'Codigo',
				'descripcion' => 'Descripcion',
			);
		}


		/**
		 * Recupera una lista de los modelos basados ​​en las actuales condiciones de búsqueda / filtro.
		 *
		 * Usecase Típico:
		 * - Inicialice los campos del modelo con los valores de la forma del filtro.
		 * - Ejecutar este método para obtener ejemplo CActiveDataProvider que filtrará
		 * Los modelos de acuerdo a los datos en los campos del modelo .
		 * - Proveedor de datos Pass a CGridView , CListView o cualquier tipo de artilugio similar.
		 *
		 * @return CActiveDataProvider el proveedor de datos que se pueden devolver los modelos
		 * basado en las condiciones de búsqueda / filtro.
		 */
		public function search()
		{
			// @todo Modifique el código siguiente para quitar atributos que no debe ser buscado .

			$criteria=new CDbCriteria;

			$criteria->compare('idproductos',$this->idproductos);
			$criteria->compare('nombreproducto',$this->nombreproducto,true);
			$criteria->compare('precio',$this->precio,true);
			$criteria->compare('existencia',$this->existencia);
			$criteria->compare('codigo',$this->codigo,true);
			$criteria->compare('descripcion',$this->descripcion,true);

			return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
			));
		}
		public static function items($tipo)
{
 // Devuelve todos los ítems que forman el arreglo
 if(!isset(self::$_items[$tipo]))
  self::loadItems($tipo);
 return self::$_items[$tipo];
}

public static function item($tipo, $id)
{
 // Devuelve el ítem al que le corresponde el id
 if(!isset(self::$_items[$tipo]))
  self::loadItems($tipo);
 return isset(self::$_items[$tipo][$id]) ? self::$_items[$tipo][$id] : false;
}

private static function loadItems($tipo)
{
 // Obtiene los registros
 self::$_items[$tipo]=array();
 $models=self::model()->findAll(array(
  'order'=>'nombreproducto',
 ));
 self::$_items[$tipo][""]="Seleccione un producto";
 foreach($models as $model)
  self::$_items[$tipo][$model->idproductos]=$model->nombreproducto;
}

	}
 ?>