<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $razonsocial
 *
 * The followings are the available model relations:
 * @property Ventas[] $ventases
 */
class Clientes extends CActiveRecord
{
	private static $_items=array();
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return reglas de validación con los atributos del modelo
	 */
	public function rules()
	{
		// NOTE: debes definir solo reglas de aquellos atributos que recibiran los elementos de entrada
		return array(
			array('nombre', 'required'),
			array('nombre, apellido, razonsocial', 'length', 'max'=>50),
			// la siguiente regla es usada solamente para busqueda
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido, razonsocial', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array reglas de relación
	 */
	public function relations()
	{
		// NOTE: puede que tenga que ajustar el nombre de la relación y la relacionada
		// nombre de la clase de las relaciones generadas automáticamente a continuación.
		return array(
			'ventases' => array(self::HAS_MANY, 'Ventas', 'cliente_id'),
		);
	}

	/**
	 * @return array etiquetas de atributos personalizados (nombre = > etiqueta)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'razonsocial' => 'Razonsocial',
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
	 * @return CActiveDataProvider el proveedor de datos que puede devolver los modelos
	 * basado en condiciones busqueda/filtrado
	 */
	public function search()
	{
		// @todo datos de entrada en el metodo de busqueda que se envian directamente el metodo criteria que a su vez 
		// va directo al widget dataprovider para indexarlo a busqueda
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('razonsocial',$this->razonsocial,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Devuelve el modelo estático de la clase AR especificado.
     * Tenga en cuenta que usted debe tener este método exacto en todos sus descendientes CActiveRecord !
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public static function items($tipo)
{
 // Devuelve todos los ítems que forman el arreglo
 if(!isset(self::$_items[$tipo]))
  self::loadItems($tipo);
 return self::$_items[$tipo];
}

//metodo que nos devuelve el item que corresponde a un producto con su id y tipo se ejecuta en tiempo de busqueda 
//sin usar el widget del framework criteria
public static function item($tipo, $id)
{
 // Devuelve el ítem al que le corresponde el id
 if(!isset(self::$_items[$tipo]))
  self::loadItems($tipo);
 return isset(self::$_items[$tipo][$id]) ? self::$_items[$tipo][$id] : false;
}

//cargamos un objeto y sus atributos con su tipo
private static function loadItems($tipo)
{
 // Obtiene los registros
 self::$_items[$tipo]=array();
 $models=self::model()->findAll(array(
  'order'=>'nombre',
 ));
 self::$_items[$tipo][""]="Seleccione un cliente"; 
 foreach($models as $model)
  self::$_items[$tipo][$model->id]=$model->nombre;
}
}
