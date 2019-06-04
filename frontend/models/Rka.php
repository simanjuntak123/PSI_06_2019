<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rka".
 *
 * @property int $Id_Rka
 * @property int $Tahun
 * @property string $Deskripsi
 * @property string $Total_Anggaran
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
            [['Tahun', 'Deskripsi', 'Total_Anggaran', 'status'], 'required'],
            [['Tahun', 'status'], 'integer'],
            [['Deskripsi'], 'string', 'max' => 120],
            [['Total_Anggaran'], 'string', 'max' => 20],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'status_id']],
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
            'Deskripsi' => 'Deskripsi',
            'Total_Anggaran' => 'Total Anggaran',
            'status' => 'Status',
        ];
    }
}
