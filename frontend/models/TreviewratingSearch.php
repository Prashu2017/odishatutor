<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Treviewrating;

/**
 * TreviewratingSearch represents the model behind the search form of `app\models\Treviewrating`.
 */
class TreviewratingSearch extends Treviewrating
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tutor_id', 'user_id', 'ratings'], 'integer'],
            [['review', 'created_at'], 'safe'],
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
        $query = Treviewrating::find();

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
            'tutor_id' => $this->tutor_id,
            'user_id' => $this->user_id,
            'ratings' => $this->ratings,
            'created_at' => $this->created_at,
            
        ]);

        $query->andFilterWhere(['like', 'review', $this->review]);

        return $dataProvider;
    }
}
