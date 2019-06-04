<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggaran_dana".
 *
 * @property int $Id_Anggaran_Dana
 * @property int $unit
 * @property int $Tahun
 * @property string $Total_Anggaran
 */
class AnggaranDana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggaran_dana';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit', 'Tahun', 'Total_Anggaran'], 'required'],
            [['unit', 'Tahun'], 'integer'],
            [['Total_Anggaran'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Anggaran_Dana' => 'Id Anggaran Dana',
            'unit' => 'Unit',
            'Tahun' => 'Tahun',
            'Total_Anggaran' => 'Total Anggaran',
        ];
    }
}
