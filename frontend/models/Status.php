<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $status_id
 * @property string $status
 *
 * @property DanaBulanan[] $danaBulanans
 * @property Rka[] $rkas
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDanaBulanans()
    {
        return $this->hasMany(DanaBulanan::className(), ['Status' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRkas()
    {
        return $this->hasMany(Rka::className(), ['status' => 'status_id']);
    }
}
