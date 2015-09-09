<?php

/**
 * This is the model class for table "cliente_compra".
 *
 * The followings are the available columns in table 'cliente_compra':
 * @property integer $id
 * @property integer $productos_idproductos
 * @property integer $cantidad
 * @property string $subtotal
 * @property integer $cliente_id_cliente
 */
class ClienteCompra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente_compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productos_idproductos, cantidad, subtotal, cliente_id_cliente', 'required'),
			array('productos_idproductos, cantidad, cliente_id_cliente', 'numerical', 'integerOnly'=>true),
			array('subtotal', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, productos_idproductos, cantidad, subtotal, cliente_id_cliente', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
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
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClienteCompra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
