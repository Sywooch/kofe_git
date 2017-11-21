<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UniqueText;

/**
 * UniqueTextSearch represents the model behind the search form about `app\models\UniqueText`.
 */
class UniqueTextSearch extends UniqueText
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'brand_id', 'service_id'], 'integer'],
            [['barnd_text', 'model_text'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UniqueText::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'brand_id' => $this->brand_id,
            'service_id' => $this->service_id,
        ]);

        $query->andFilterWhere(['like', 'barnd_text', $this->barnd_text])
            ->andFilterWhere(['like', 'model_text', $this->model_text]);

        return $dataProvider;
    }
}
