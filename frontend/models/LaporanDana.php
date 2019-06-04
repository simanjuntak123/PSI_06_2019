<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laporan_dana".
 *
 * @property int $Id_Laporan_Dana
 * @property string $Item
 * @property string $Satuan
 * @property string $Harga_Persatuan
 * @property int $Jumlah
 * @property string $Total_Harga_Item
 * @property string $File
 */
class LaporanDana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan_dana';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Item', 'Satuan', 'Harga_Persatuan', 'Jumlah', 'Total_Harga_Item', 'File'], 'required'],
            [['Jumlah'], 'integer'],
            [['Item'], 'string', 'max' => 40],
            [['Satuan'], 'string', 'max' => 11],
            [['Harga_Persatuan', 'Total_Harga_Item'], 'string', 'max' => 20],
            [['File'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Laporan_Dana' => 'Id Laporan Dana',
            'Item' => 'Item',
            'Satuan' => 'Satuan',
            'Harga_Persatuan' => 'Harga Persatuan',
            'Jumlah' => 'Jumlah',
            'Total_Harga_Item' => 'Total Harga Item',
            'File' => 'File',
        ];
    }
}
