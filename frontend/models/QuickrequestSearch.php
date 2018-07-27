<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Quickrequest;

/**
 * QuickrequestSearch represents the model behind the search form of `frontend\models\Quickrequest`.
 */
class QuickrequestSearch extends Quickrequest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'mobile', 'email', 'board', 'class', 'subject', 'studyplace', 'city', 'locality', 'pincode', 'message', 'created_at'], 'safe'],
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
        // $email = Yii->$app->user->identity->email;
        $query = Quickrequest::find();
        // ->where(['email' => $email ]);

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
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'board', $this->board])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'studyplace', $this->studyplace])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'locality', $this->locality])
            ->andFilterWhere(['like', 'pincode', $this->pincode])
            ->andFilterWhere(['like', 'message', $this->message]);

        return $dataProvider;
    }
}
