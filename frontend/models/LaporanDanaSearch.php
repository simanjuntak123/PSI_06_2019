<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LaporanDana;

/**
 * LaporanDanaSearch represents the model behind the search form of `app\models\LaporanDana`.
 */
class LaporanDanaSearch extends LaporanDana
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Laporan_Dana', 'Jumlah'], 'integer'],
            [['Item', 'Satuan', 'Harga_Persatuan', 'Total_Harga_Item', 'File'], 'safe'],
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
        $query = LaporanDana::find();

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
            'Id_Laporan_Dana' => $this->Id_Laporan_Dana,
            'Jumlah' => $this->Jumlah,
        ]);

        $query->andFilterWhere(['like', 'Item', $this->Item])
            ->andFilterWhere(['like', 'Satuan', $this->Satuan])
            ->andFilterWhere(['like', 'Harga_Persatuan', $this->Harga_Persatuan])
            ->andFilterWhere(['like', 'Total_Harga_Item', $this->Total_Harga_Item])
            ->andFilterWhere(['like', 'File', $this->File]);

        return $dataProvider;
    }
}
