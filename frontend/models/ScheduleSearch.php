<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Schedule;

/**
 * ScheduleSearch represents the model behind the search form of `app\models\Schedule`.
 */
class ScheduleSearch extends Schedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tutor_id'], 'integer'],
            [['day', 'time_interval', 'student_id', 'avalable', 'from_time', 'upto_time'], 'safe'],
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
        $query = Schedule::find();

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
            'from_time' => $this->from_time,
            'upto_time' => $this->upto_time,
            'tutor_id' => $this->tutor_id,
        ]);

        $query->andFilterWhere(['like', 'day', $this->day])
            ->andFilterWhere(['like', 'time_interval', $this->time_interval])
            ->andFilterWhere(['like', 'student_id', $this->student_id])
            ->andFilterWhere(['like', 'avalable', $this->avalable]);

        return $dataProvider;
    }
}
