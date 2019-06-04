<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DanaBulanan;

/**
 * DanaBulananSearch represents the model behind the search form of `app\models\DanaBulanan`.
 */
class DanaBulananSearch extends DanaBulanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Dana_Bulanan', 'Status'], 'integer'],
            [['Bulan', 'Total_Dana_Dibutuhkan'], 'safe'],
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
        $query = DanaBulanan::find();

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
            'Id_Dana_Bulanan' => $this->Id_Dana_Bulanan,
            'Status' => $this->Status,
        ]);

        $query->andFilterWhere(['like', 'Bulan', $this->Bulan])
            ->andFilterWhere(['like', 'Total_Dana_Dibutuhkan', $this->Total_Dana_Dibutuhkan]);

        return $dataProvider;
    }
}
