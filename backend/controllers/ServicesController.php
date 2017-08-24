<?php

namespace backend\controllers;

use Yii;
use app\models\Services;
use app\models\ServicesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ServicesController implements the CRUD actions for Services model.
 */
class ServicesController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'delete', 'view', 'linking', 'get-links', 'get-row', 'save-services'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
	
	public function actionSaveServices() {
		'DELETE FROM yu_prices WHERE page_id = ' . $_POST['Pages']['parent'];
		\Yii::$app->db->createCommand('DELETE FROM yu_prices WHERE page_id = ' . $_POST['Pages']['parent'])->execute();		
		foreach($_POST['price'] as $service_id => $regions) {			
			foreach($regions as $region_id => $price) {
				$sql = "INSERT INTO `yu_prices` (service_id, region_id, price, page_id) VALUES ('$service_id', '$region_id', '$price', '{$_POST['Pages']['parent']}');";
				\Yii::$app->db->createCommand($sql)->execute();
			}
		}
	}

    public function actionGetRow($id) {
        $regions = \Yii::$app->params['regions'];
        $id = (int) $id;
        $sql = 'SELECT * FROM {{%services}} WHERE id = ' . $id . ' LIMIT 1';
        $row = \Yii::$app->db->createCommand($sql)->queryOne();
        $html = '<tr><td class="number"></td><td class="service-title">' . $row['title'] . '</td>';
        foreach ($regions as $region) {
            $html .= '<td><input class="price" name="price[' . $row['id'] . '][' . $region['id'] . ']" type="text" value=""></td>';
        }
        echo $html .= '<td><span class="delete-service" style="cursor: pointer;">X</span></td></tr>';
        \Yii::$app->end();
    }

    public function actionGetLinks($id) {
        $regions = \Yii::$app->params['regions'];
        $id = (int) $id;
        $sql = 'SELECT * FROM {{%price_list}} WHERE page_id = ' . $id . ' GROUP BY service_id';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'SELECT * FROM {{%prices}} WHERE page_id = ' . $id;
        $prices = \Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($regions as $region) {
            $regionNames .= '<td>' . $region['title'] . '</td>';
        }
        $html = '<form id="price-list"><table class="table">';
        $html .= '<tr><td>№</td><td>Услуга</td>' . $regionNames . '</tr>';
        foreach ($rows as $key => $row) {
            $regionPrices = '';
            foreach ($regions as $region) {
                $r = false;
                foreach ($prices as $price) {
                    if ($region['id'] == $price['region_id'] && $row['service_id'] == $price['service_id']) {
                        $regionPrices .= '<td><input type="text" name="price[' . $row['service_id'] . '][' . $region['id'] . ']" value="' . $price['price'] . '"></td>';
                        $r = true;
                        break;
                    }
                }
                if (!$r)
                    $regionPrices .= '<td><input name="price[' . $row['service_id'] . '][' . $region['id'] . ']" type="text" value=""></td>';
            }
            $html .= '<tr><td>' . ++$key . '</td><td>' . $row['title'] . '</td>' . $regionPrices . '</tr>';
        }
        $html .= '</table></form>';
        echo $html;
        \Yii::$app->end();
    }

    public function actionLinking() {
        return $this->render('linking');
    }

    /**
     * Lists all Services models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ServicesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Services model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Services model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Services();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Services model.
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
     * Deletes an existing Services model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Services model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Services the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Services::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
