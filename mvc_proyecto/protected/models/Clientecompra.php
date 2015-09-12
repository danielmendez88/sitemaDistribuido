<?php

/**
 * This is the model class for table "cliente_compra".
 *
 * las siguientes columnas se encuentran disponibles 'cliente_compra':
 * @property integer $id
 * @property integer $productos_idproductos
 * @property integer $cantidad
 * @property string $subtotal
 * @property integer $cliente_id_cliente
 */
class ClienteCompra extends CActiveRecord
{
	/**
	 * @return la cadena esta asociada a la base de datos
	 */
	public function tableName()
	{
		return 'cliente_compra';
	}

	/**
	 * @return un arreglo donde se validan los atributos que cuenta el modelo
	 */
	public function rules()
	{
		// NOTE: debes definir solo reglas de aquellos atributos que recibiran los elementos de entrada
		return array(
			array('productos_idproductos, cantidad, subtotal, cliente_id_cliente', 'required'),
			array('productos_idproductos, cantidad, cliente_id_cliente', 'numerical', 'integerOnly'=>true),
			array('subtotal', 'length', 'max'=>10),
			// la siguiente regla es usada para la busqueda
			// @todo Please remove those attributes that should not be searched.
			array('id, productos_idproductos, cantidad, subtotal, cliente_id_cliente', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return arreglo de reglas relacional
	 */
	public function relations()
	{
		// NOTE: puedes necesitar ajustar el nombre de la relación y la clase para que la relación se genere
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Identificador',
			'productos_idproductos' => 'Clave del producto',
			'cantidad' => 'Cantidad',
			'subtotal' => 'Subtotal',
			'cliente_id_cliente' => 'Cliente',
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
	* @return CActiveDataProvider the data provider that can return the models
	* basado en las condiciones de busqueda/filtrado
	*/
	public function search()
	{
		// @todo son atributos que se envian como parametros de la busqueda en CActiveDataProvider. pueden quitarse aquellos parametros
		// que no usaremos en la busqueda

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('productos_idproductos',$this->productos_idproductos);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('subtotal',$this->subtotal,true);
		$criteria->compare('cliente_id_cliente',$this->cliente_id_cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Devuelve el modelo estático de la clase AR especificado.
	 * Tenga en cuenta que usted debe tener este método exacto en todos sus descendientes CActiveRecord !
	 * @param string $className active record class name.
	 * @return ClienteCompra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
