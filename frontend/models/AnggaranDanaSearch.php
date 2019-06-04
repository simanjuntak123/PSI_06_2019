<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AnggaranDana;

/**
 * AnggaranDanaSearch represents the model behind the search form of `app\models\AnggaranDana`.
 */
class AnggaranDanaSearch extends AnggaranDana
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Anggaran_Dana', 'unit', 'Tahun'], 'integer'],
            [['Total_Anggaran'], 'safe'],
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
        $query = AnggaranDana::find();

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
            'Id_Anggaran_Dana' => $this->Id_Anggaran_Dana,
            'unit' => $this->unit,
            'Tahun' => $this->Tahun,
        ]);

        $query->andFilterWhere(['like', 'Total_Anggaran', $this->Total_Anggaran]);

        return $dataProvider;
    }
}
