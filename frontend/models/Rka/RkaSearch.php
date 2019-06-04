<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rka;

/**
 * RkaSearch represents the model behind the search form of `app\models\Rka`.
 */
class RkaSearch extends Rka
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Rka', 'Tahun'], 'integer'],
            [['Unit', 'Deskripsi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Rka::find();

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
            'Id_Rka' => $this->Id_Rka,
            'Tahun' => $this->Tahun,
        ]);

        $query->andFilterWhere(['like', 'Unit', $this->Unit]);
            ->andFilterWhere(['like', 'Deskripsi', $this->Deskripsi]);

        return $dataProvider;
    }
}
