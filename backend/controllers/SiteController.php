<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'url'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    public static function getSiteConfig() {
        $host = Yii::$app->request->hostInfo;
        $hostArr = explode('.', $host);
        $ad = '.' . end($hostArr);
        $host = str_replace([$ad, 'http://', 'https://', 'admin.'], '', $host);
        return Yii::$app->params['siteConfigs'][$host];
    }

    public function actionUrl() {
        $uploadedFile = UploadedFile::getInstanceByName('upload');
        $mime = \yii\helpers\FileHelper::getMimeType($uploadedFile->tempName);
        $file = time() . "_" . $uploadedFile->name;

        $url = Yii::$app->urlManager->createAbsoluteUrl('/uploads/ckeditor/' . $file);
        $uploadPath = Yii::getAlias('@backend') . '/web/uploads/ckeditor/' . $file;
        //extensive suitability check before doing anything with the file…
        if ($uploadedFile == null) {
            $message = "No file uploaded.";
        } else if ($uploadedFile->size == 0) {
            $message = "The file is of zero length.";
        } else if ($mime != "image/jpeg" && $mime != "image/png") {
            $message = "The image must be in either JPG or PNG format. Please upload a JPG or PNG instead.";
        } else if ($uploadedFile->tempName == null) {
            $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
        } else {
            $message = "";
            $move = $uploadedFile->saveAs($uploadPath);
            if (!$move) {
                $message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
            }
        }
        $funcNum = $_GET['CKEditorFuncNum'];
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
