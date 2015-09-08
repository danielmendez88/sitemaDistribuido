<?php 
	/**
	* 
	*/
	class Clientecompra extends CActiveRecord
	{
		
		public static function model($ClassName = __CLASS__)
		{
			return parent::model($ClassName);
		}

		public function tableName()
		{
			return "cliente_compra";
		}

		public function rules()
		{
			# code...
			array("cantidad","required");
		}
	}
 ?>