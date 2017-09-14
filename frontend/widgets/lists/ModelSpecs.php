<?php

namespace app\widgets\lists;

use yii\base\Widget;
use Yii;

class ModelSpecs extends Widget {

    public $modelId = null;

    public function run() {
        $sql = 'SELECT * FROM {{%specs}} WHERE model_id = ' . (int) $this->modelId . ' ORDER BY spec_group desc';
        $specs = Yii::$app->db->createCommand($sql)->queryAll();
        $features = [];
        foreach ($specs as $spec) {
            $features[$spec['spec_group']][] = $spec;
        }       
        return $this->render('model-specs', ['specs' => $features]);
    }

}
