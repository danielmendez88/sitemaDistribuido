<?php

class ClientesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//este layout es para cambiar la vista
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // realizar el control de acceso para las operaciones CRUD
			//'postOnly + delete', // sólo permitimos eliminación mediante petición POST
		);
	}

	/**
	 * Especifica las reglas de control de acceso .
	 * Este método es utilizado por el filtro ' AccessControl ' . 
	 * @return Reglas de control de acceso a una matriz
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // permiten a todos los usuarios llevar a cabo "índice " y acciones "Ver"
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // permite al usuario autenticado a realizar ' crear ' y las acciones de la "actualización"
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // permite al usuario administrador para realizar 'admin' y acciones 'Eliminar'
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // denegar todos los usuarios
				'users'=>array('*'),
			),
		);
	}

	/**
	 * muestra un modelo en particular
	 * @param entero $ id del ID del modelo que se muestra
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Crea un nuevo modelo.
	 * Si la creación se realiza correctamente, el navegador será redirigido a la página de "vista" .
	 */
	public function actionCreate()
	{
		$model= new Clientes;

		// se descomenta la siguiente linea si es requerida la validación en AJAX
		// $this->performAjaxValidation($model);

		if(isset($_POST['Clientes']))
		{
			$model->attributes=$_POST['Clientes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * actualizar un modelo en particular
	 * Si la actualización se realiza correctamente, el navegador será redirigido a la pagina de vista
	 * @param con el id del modelo al cual redireccionar
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// se descomenta la siguiente linea si es requerida la validación en AJAX
		// $this->performAjaxValidation($model);

		if(isset($_POST['Clientes']))
		{
			$model->attributes=$_POST['Clientes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * borramos un modelo en particular
	 * si la eliminación se realiza correctamente, el navegador será redirigido en la pagina 'admin'
	 * @param integer $id the ID del modelo 
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

			// si la petición AJAX ( provocado por la eliminación a través de la vista de cuadrícula admin) , no debemos redirigir el navegador
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lista de todos los modelos
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Clientes');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manejar todos los modelos
	 */
	public function actionAdmin()
	{
		$model=new Clientes('search');
		$model->unsetAttributes();  // limpiar cualquier variable por defecto
		if(isset($_GET['Clientes']))
			$model->attributes=$_GET['Clientes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Devuelve el modelo de datos basado en la clave primaria dada en la variable GET.
	 * Si no se encuentra el modelo de datos , se produce una excepción HTTP 
	 * @param integer $id the ID del modelo a cargar
	 * @return ClienteCompra el modelo a cargar
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Clientes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Realiza la validación de AJAX 
	 * @param ClienteCompra $model el modelo a validar
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='clientes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
