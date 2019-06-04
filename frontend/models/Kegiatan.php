<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kegiatan".
 *
 * @property int $Id_Kegiatan
 * @property string $Sequence
 * @property string $deskripsi
 * @property string $PIC
 * @property int $dana_terpakai
 * @property string $rencana_waktu_pelaksanaan
 */
class Kegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Sequence', 'deskripsi', 'PIC', 'dana_terpakai', 'rencana_waktu_pelaksanaan'], 'required'],
            [['dana_terpakai'], 'integer'],
            [['Sequence'], 'string', 'max' => 4],
            [['deskripsi'], 'string', 'max' => 120],
            [['PIC'], 'string', 'max' => 40],
            [['rencana_waktu_pelaksanaan'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Kegiatan' => 'Id Kegiatan',
            'Sequence' => 'Sequence',
            'deskripsi' => 'Deskripsi',
            'PIC' => 'Pic',
            'dana_terpakai' => 'Dana Terpakai',
            'rencana_waktu_pelaksanaan' => 'Rencana Waktu Pelaksanaan',
        ];
    }
}
