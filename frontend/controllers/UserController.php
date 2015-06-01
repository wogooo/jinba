<?php

namespace frontend\controllers;

use app\models;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Json;
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller {
	public function behaviors() {
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['post'],
				],
			],
		];
	}

	/**
	 * Lists all User models.
	 * @return mixed
	 */
	public function actionIndex() {
		$get = Yii::$app->request->get();
		if (isset($get["pwd"]) && $get["pwd"] == "jbcfh2015jbcfh") {
			$dataProvider = new ActiveDataProvider([
				'query' => \app\models\User::find(),
			]);

			return $this->render('index', [
				'dataProvider' => $dataProvider,
			]);
		}else{
			echo "您的权限不够";
		}
	}

	/**
	 * Displays a single User model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id) {
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new User model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate() {
		$time = time();
		$userModel = new User();
		$companyModel = new Company();
		$extendModel = new Extend();
		if (Yii::$app->request->isAjax) {
			$form = Yii::$app->request->post();

			$mobile = $form['mobile'];

			if ($userModel->checkexist($mobile)) {

				$res = [
					'code' => 1001,
					'data' => '',
					'msg' => "手机已存在",
				];

			} else {


				$form['create_time'] = $time;
				$form['update_time'] = $time;

				if (empty($form['number'])) {
					$form['number'] = 0;
				}

				$userModel->attributes = $form;

				$userSetAttrArr = [];

				if (isset($form['type'])) {
					$userSetAttrArr['type'] = implode(',', $form['type']);
				}


				$userModel->setAttributes($userSetAttrArr);

				if ($userModel->validate() && $companyModel->validate() && $extendModel->validate()) {

					if ($userModel->save()) {

						$uid = $userModel->id;

						$companyModel->attributes = $form;

						$companyModel->setAttributes(['uid' => $uid]);

						if ($companyModel->save()) {

							$extendModel->attributes = $form;

							$extendSetAttrArr = [
								'uid' => $uid,
							];

							if (isset($form['information'])) {
								$extendSetAttrArr['information'] = implode(',', $form['information']);
							}

							$extendModel->setAttributes($extendSetAttrArr);

							if ($extendModel->save()) {
								$res = [
									'code' => 0,
									'data' => ["uid" => $uid],
									'msg' => 'success',
								];

							} else {
								$res = [
									'code' => 1,
									'data' => '',
									'msg' => $userModel->errors,
								];
							}
						} else {
							$res = [
								'code' => 1,
								'data' => '',
								'msg' => $userModel->errors,
							];
						}
					} else {
						$res = [
							'code' => 1,
							'data' => '',
							'msg' => $userModel->errors,
						];
					}
				} else {
					$res = [
						'code' => 1,
						'data' => '',
						'msg' => $userModel->errors,
					];
				}
			}
			header("Content-type:application/json;charset=utf-8");
			echo Json::encode($res);
			exit;
		}
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing User model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing User model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the User model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return User the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = \app\models\User::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
