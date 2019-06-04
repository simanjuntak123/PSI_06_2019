<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PenggunaanAnggaran;

/**
 * PenggunaanAnggaranSearch represents the model behind the search form of `app\models\PenggunaanAnggaran`.
 */
class PenggunaanAnggaranSearch extends PenggunaanAnggaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Penggunaan_Anggaran'], 'integer'],
            [['kode', 'nama', 'snoozed_WR2', 'WR2', 'tanggal_persetujuan_WR2', 'total_diajukan','batas_tanggal_persetujuan_WR2', 'snoozed_controller', 'batas_tanggal_persetujuan_controller', 'tanggal_persetujuan_controller', 'controller', 'snoozed_keuangan', 'batas_tanggal_persetujuan_keuangan', 'taggal_persetujuan_keuangan', 'keuangan', 'snoozed_atasan', 'batas_tanggal_persetujuan_atasan', 'tanggal_persetujuan_atasan', 'atasan', 'verifikasi'], 'safe'],
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
        $query = PenggunaanAnggaran::find();

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
            'Id_Penggunaan_Anggaran' => $this->Id_Penggunaan_Anggaran,
            'total_diajukan' => $this->total_diajukan,
            'tanggal_persetujuan_WR2' => $this->tanggal_persetujuan_WR2,
            'batas_tanggal_persetujuan_WR2' => $this->batas_tanggal_persetujuan_WR2,
            'batas_tanggal_persetujuan_controller' => $this->batas_tanggal_persetujuan_controller,
            'tanggal_persetujuan_controller' => $this->tanggal_persetujuan_controller,
            'batas_tanggal_persetujuan_keuangan' => $this->batas_tanggal_persetujuan_keuangan,
            'taggal_persetujuan_keuangan' => $this->taggal_persetujuan_keuangan,
            'batas_tanggal_persetujuan_atasan' => $this->batas_tanggal_persetujuan_atasan,
            'tanggal_persetujuan_atasan' => $this->tanggal_persetujuan_atasan,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'snoozed_WR2', $this->snoozed_WR2])
            ->andFilterWhere(['like', 'WR2', $this->WR2])
            ->andFilterWhere(['like', 'snoozed_controller', $this->snoozed_controller])
            ->andFilterWhere(['like', 'controller', $this->controller])
            ->andFilterWhere(['like', 'snoozed_keuangan', $this->snoozed_keuangan])
            ->andFilterWhere(['like', 'keuangan', $this->keuangan])
            ->andFilterWhere(['like', 'snoozed_atasan', $this->snoozed_atasan])
            ->andFilterWhere(['like', 'atasan', $this->atasan])
            ->andFilterWhere(['like', 'verifikasi', $this->verifikasi]);

        return $dataProvider;
    }
}
