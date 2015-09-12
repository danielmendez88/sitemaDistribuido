<?php

/**
 * Clase ContactForm .
 * ContactForm es la estructura de datos para mantener
 * contacto con el formulario. es usado en 'contact' acción del 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * declaramos las reglas de validación
	 */
	public function rules()
	{
		return array(
			// name, email, texto y cuerpo son requeridos
			array('name, email, subject, body', 'required'),
			// email tiene que ser valida la dirección
			array('email', 'email'),
			// verifyCode necesita ser introducido correctamente
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declara etiquetas de atributos personalizados.
	 * Si no declarados aquí , un atributo tendría una etiqueta que es
	 * El mismo que su nombre con la primera letra en mayúscula.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}