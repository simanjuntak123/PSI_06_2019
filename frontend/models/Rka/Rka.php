<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rka".
 *
 * @property int $Id_Rka
 * @property int $Tahun
 * @property string $Unit
 */
class Rka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tahun', 'Unit', ['Deskripsi']], 'required'],
            [['Tahun'], 'integer'],
            [['Unit','Deskripsi'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Rka' => 'Id Rka',
            'Tahun' => 'Tahun',
            'Unit' => 'Unit',
            'Deskripsi' => 'Deskripsi',
        ];
    }
}
