<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PermintaanDana;

/**
 * PermintaanDanaSearch represents the model behind the search form of `app\models\PermintaanDana`.
 */
class PermintaanDanaSearch extends PermintaanDana
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_Kegiatan', 'deskripsi', 'Rencana_Waktu_Pelaksanaan', 'Jumlah_Dana'], 'safe'],
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
        $query = PermintaanDana::find();

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
            'Rencana_Waktu_Pelaksanaan' => $this->Rencana_Waktu_Pelaksanaan,
        ]);

        $query->andFilterWhere(['like', 'Nama_Kegiatan', $this->Nama_Kegiatan])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'Jumlah_Dana', $this->Jumlah_Dana]);

        return $dataProvider;
    }
}
