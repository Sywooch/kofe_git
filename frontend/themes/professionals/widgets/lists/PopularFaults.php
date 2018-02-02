<?php

namespace professionals\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class PopularFaults extends Widget {

    public $view = 'faults';
    public $type = 2;
    public $title = '';
    public $is_popular = true;
    public $limit = 0;
    public $form = true;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        if ($this->form) {
            $model = new \frontend\models\AskForm();
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                \app\components\CController::sendToRoistat($model->phone, '', '', $model->name);
                Yii::$app->getSession()->setFlash('success', 'seccess');
            }
        }
        $sql = 'SELECT price, title, url, description, is_popular, image FROM {{%services}} WHERE type = ' . (int) $this->type . '' . ($this->is_popular ? ' and is_popular = 1' : '') . ' and category_id = ' . CController::$category['id'] . ($this->limit > 0 ? ' LIMIT ' . $this->limit : '');
        $rows = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($rows))
            return '';
        CController::seoShuffle($rows, $siteConfig['id']);
        return $this->render($this->view, [
                    'rows' => $rows,
                    'title' => $this->title,
                    'type' => $this->type,
                    'is_popular' => $this->is_popular,
                    'model' => $this->form ? $model : null
        ]);
    }

}
