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
 * The followings are the available model relations:
 * @property Cliente[] $clientes
 */
	class Productos extends CActiveRecord
	{
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
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreproducto, existencia', 'required'),
			array('existencia', 'numerical', 'integerOnly'=>true),
			array('nombreproducto', 'length', 'max'=>50),
			array('precio', 'length', 'max'=>5),
			array('codigo', 'length', 'max'=>45),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idproductos, nombreproducto, precio, existencia, codigo, descripcion', 'safe', 'on'=>'search'),
		);
	}

		/**
		 * @return array customized attribute labels (name=>label)
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
		 * Retrieves a list of models based on the current search/filter conditions.
		 *
		 * Typical usecase:
		 * - Initialize the model fields with values from filter form.
		 * - Execute this method to get CActiveDataProvider instance which will filter
		 * models according to data in model fields.
		 * - Pass data provider to CGridView, CListView or any similar widget.
		 *
		 * @return CActiveDataProvider the data provider that can return the models
		 * based on the search/filter conditions.
		 */
		public function search()
		{
			// @todo Please modify the following code to remove attributes that should not be searched.

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

	}
 ?>