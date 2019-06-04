<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit".
 *
 * @property int $Id_Unit
 * @property string $kode
 * @property string $nama
 * @property string $deskripsi
 */
class Unit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'deskripsi'], 'required'],
            [['kode'], 'string', 'max' => 40],
            [['nama'], 'string', 'max' => 8],
            [['deskripsi'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Unit' => 'Id Unit',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
        ];
    }
}
