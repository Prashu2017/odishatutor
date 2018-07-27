<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Settings;

/**
 * SettingsSearch represents the model behind the search form about `backend\models\Settings`.
 */
class SettingsSearch extends Settings
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['logo', 'favicon', 'copyright_text', 'site_name', 'smtp_host', 'smtp_user', 'smtp_pass', 'smtp_port', 'banner_1', 'banner_2', 'banner_3', 'banner_4', 'smtp_crypto', 'default_email'], 'safe'],
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
        $query = Settings::find();

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
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'favicon', $this->favicon])
            ->andFilterWhere(['like', 'copyright_text', $this->copyright_text])
            ->andFilterWhere(['like', 'site_name', $this->site_name])
            ->andFilterWhere(['like', 'smtp_host', $this->smtp_host])
            ->andFilterWhere(['like', 'smtp_user', $this->smtp_user])
            ->andFilterWhere(['like', 'smtp_pass', $this->smtp_pass])
            ->andFilterWhere(['like', 'smtp_port', $this->smtp_port])
            ->andFilterWhere(['like', 'smtp_crypto', $this->smtp_crypto])
            ->andFilterWhere(['like', 'default_email', $this->default_email]);

        return $dataProvider;
    }
}
