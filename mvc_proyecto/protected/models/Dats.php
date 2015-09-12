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
	public static function model($className=__CLASS__)
		{
			# code... retorna toda la clase que vine del core de yii
			return parent::model($className);
		}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('nombre, apellido, razonsocial', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido, razonsocial', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'razonsocial' => 'Razonsocial',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('razonsocial',$this->razonsocial,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
public static function items($tipo)
{
 // Devuelve todos los ítems que forman el arreglo
 if(!isset(self::$_items[$tipo]))
  self::loadItems($tipo);
 return self::$_items[$tipo];
}

public static function item($tipo, $ids)
{
 // Devuelve el ítem al que le corresponde el id
 if(!isset(self::$_items[$tipo]))
  self::loadItems($tipo);
 return isset(self::$_items[$tipo][$ids]) ? self::$_items[$tipo][$ids] : false;
}

private static function loadItems($tipo)
{
 // Obtiene los registros
 self::$_items[$tipo]=array();
 $models=self::model()->findAll(array(
  'order'=>'id',
 ));
 self::$_items[$tipo][""]="Seleccione un cliente";
 foreach($models as $model)
  self::$_items[$tipo][$model->id]=$model->id;
}

	}
 ?>