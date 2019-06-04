<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "permintaan_dana".
 *
 * @property string $Nama_Kegiatan
 * @property string $deskripsi
 * @property string $Rencana_Waktu_Pelaksanaan
 * @property string $Jumlah_Dana
 */
class PermintaanDana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_dana';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_Kegiatan', 'deskripsi', 'Rencana_Waktu_Pelaksanaan', 'Jumlah_Dana'], 'required'],
            [['Rencana_Waktu_Pelaksanaan'], 'safe'],
            [['Nama_Kegiatan', 'deskripsi'], 'string', 'max' => 120],
            [['Jumlah_Dana'], 'string', 'max' => 20],
            [['Nama_Kegiatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nama_Kegiatan' => 'Nama Kegiatan',
            'deskripsi' => 'Deskripsi',
            'Rencana_Waktu_Pelaksanaan' => 'Rencana Waktu Pelaksanaan',
            'Jumlah_Dana' => 'Jumlah Dana',
        ];
    }
}
