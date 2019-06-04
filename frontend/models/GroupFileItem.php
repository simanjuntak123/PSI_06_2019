<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group_file_item".
 *
 * @property int $id_gruop_file
 * @property string $file_laporan_dana
 * @property string $Kegiatan
 * @property string $nama_file
 */
class GroupFileItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_file_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_gruop_file', 'file_laporan_dana', 'Kegiatan', 'nama_file'], 'required'],
            [['id_gruop_file'], 'integer'],
            [['file_laporan_dana'], 'string', 'max' => 255],
            [['Kegiatan'], 'string', 'max' => 40],
            [['nama_file'], 'string', 'max' => 100],
            [['id_gruop_file'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_gruop_file' => 'Id Gruop File',
            'file_laporan_dana' => 'File Laporan Dana',
            'Kegiatan' => 'Kegiatan',
            'nama_file' => 'Nama File',
        ];
    }
}
