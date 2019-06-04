<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "file_rka".
 *
 * @property int $id_file_rka
 * @property string $file_rka
 * @property string $unit
 */
class FileRka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file_rka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_file_rka', 'file_rka', 'unit'], 'required'],
            [['id_file_rka'], 'integer'],
            [['file_rka'], 'string', 'max' => 250],
            [['unit'], 'string', 'max' => 4],
            [['id_file_rka'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_file_rka' => 'Id File Rka',
            'file_rka' => 'File Rka',
            'unit' => 'Unit',
        ];
    }
}
