<?php

namespace backend\controllers;

use Yii;
use app\models\Seo;
use app\models\SeoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\filters\AccessControl;

/**
 * SeoController implements the CRUD actions for Seo model.
 */
class SeoController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'delete', 'view', 'redirects'],
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

    public static function getSiteConfig($host) {
        $hostArr = explode('.', $host);
        $ad = '.' . end($hostArr);
        $host = str_replace([$ad, 'http://', 'https://'], '', $host);
        return Yii::$app->params['siteConfigs'][$host];
    }

    public function actionRedirects() {
        $domain = str_replace('admin.', '', $_SERVER['SERVER_NAME']);
        $siteCOnfig = self::getSiteConfig($domain);
        $file = Yii::getAlias('@common') . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'redirects.php';
        $redirects = require($file);
        $redirects = $redirects[$siteCOnfig['id']];
        if (isset($_POST['save'])) {
            $from = $_POST['from'];
            $to = $_POST['to'];
            $site = $_POST['site'];
            $b = ['http://kofe03.lc/test' => 'http://kofe03.lc/test2'];
            file_put_contents('filename.txt', var_export($b, true));
        }
        $sites = [];
        foreach (Yii::$app->params['siteConfigs'] as $title => $config) {
            $sites[$config['id']] = $title . '.ru';
        }
        return $this->render('redirects', [
                    'sites' => $sites, 'redirects' => $redirects,
        ]);
    }

    /**
     * Lists all Seo models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new SeoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Seo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Seo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($url) {
        $model = new Seo();
        $model->url = $url;

        $m = $this->findModelbyUrl($url, $_GET['site_id']);

        if ($m !== null)
            return $this->redirect(['seo/update', 'url' => $url, 'id' => 0, 'site_id' => $_GET['site_id']]);
        if ($model->load(Yii::$app->request->post())) {
            $model->site_id = $_GET['site_id'];
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Seo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        if (isset($_GET['url'])) {
            $model = $this->findModelbyUrl(urldecode($_GET['url']), $_GET['site_id']);
            if ($model === null) {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        } else {
            $model = $this->findModel($id);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Seo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModelbyUrl($url, $id) {
        $model = Seo::findOne(['url' => $url, 'site_id' => $id]);
        return $model;
    }

    /**
     * Finds the Seo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Seo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Seo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
