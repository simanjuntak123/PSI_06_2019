<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GroupFileItem;

/**
 * GroupFileItemSearch represents the model behind the search form of `app\models\GroupFileItem`.
 */
class GroupFileItemSearch extends GroupFileItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_gruop_file'], 'integer'],
            [['file_laporan_dana', 'Kegiatan', 'nama_file'], 'safe'],
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
        $query = GroupFileItem::find();

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
            'id_gruop_file' => $this->id_gruop_file,
        ]);

        $query->andFilterWhere(['like', 'file_laporan_dana', $this->file_laporan_dana])
            ->andFilterWhere(['like', 'Kegiatan', $this->Kegiatan])
            ->andFilterWhere(['like', 'nama_file', $this->nama_file]);

        return $dataProvider;
    }
}
