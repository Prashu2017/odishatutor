<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;

/**
 * StudentSearch represents the model behind the search form of `common\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            ['role', 'default', 'value' => 10], 
            ['role', 'in', 'range' => [self::ROLE_STUDENT, self::ROLE_ADMIN, self::ROLE_TEACHER]],
            
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
        // $role = 
        $query = User::find();

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
            'role' => 10,
        ]);

        // $query->andFilterWhere(['like', 'first_name', $this->first_name])
        //     ->andFilterWhere(['like', 'last_name', $this->last_name])
        //     ->andFilterWhere(['like', 'mobile', $this->mobile])
        //     ->andFilterWhere(['like', 'image', $this->image])
        //     ->andFilterWhere(['like', 'class', $this->class]);

        return $dataProvider;
    }
}
