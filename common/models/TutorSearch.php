<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tutor;

/**
 * TutorSearch represents the model behind the search form about `common\models\Tutor`.
 */
class TutorSearch extends Tutor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'experience', 'digital_pen', 'country_id', 'state_id', 'city_id'], 'integer'],
            [['firstname', 'lastname', 'phone', 'dob', 'age', 'image', 'subjects', 'expertise_subject', 'professional', 'pricing', 'language', 'expertise_course', 'describe_you', 'pincode', 'street_address', 'website', 'previous_work_place'], 'safe'],
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
        $query = Tutor::find();

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
            'user_id' => $this->user_id,
            'dob' => $this->dob,
            'gender' => $this->gender,
            'experience' => $this->experience,
            'geographically_present' => $this->geographically_present,
            'available_for' => $this->available_for,
            'digital_pen' => $this->digital_pen,
            'country_id' => $this->country_id,
            'state_id' => $this->state_id,
            'city_id' => $this->city_id,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'subjects', $this->subjects])
            ->andFilterWhere(['like', 'expertise_subject', $this->expertise_subject])
            ->andFilterWhere(['like', 'professional', $this->professional])
            ->andFilterWhere(['like', 'pricing', $this->pricing])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'expertise_course', $this->expertise_course])
            ->andFilterWhere(['like', 'describe_you', $this->describe_you])
            ->andFilterWhere(['like', 'pincode', $this->pincode])
            ->andFilterWhere(['like', 'street_address', $this->street_address])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'previous_work_place', $this->previous_work_place]);

        return $dataProvider;
    }
}
