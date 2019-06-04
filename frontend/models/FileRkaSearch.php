<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FileRka;

/**
 * FileRkaSearch represents the model behind the search form of `app\models\FileRka`.
 */
class FileRkaSearch extends FileRka
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_file_rka'], 'integer'],
            [['file_rka', 'unit'], 'safe'],
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
        $query = FileRka::find();

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
            'id_file_rka' => $this->id_file_rka,
        ]);

        $query->andFilterWhere(['like', 'file_rka', $this->file_rka])
            ->andFilterWhere(['like', 'unit', $this->unit]);

        return $dataProvider;
    }
}
