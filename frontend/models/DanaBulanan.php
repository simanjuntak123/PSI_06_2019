<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dana_bulanan".
 *
 * @property int $Id_Dana_Bulanan
 * @property string $Bulan
 * @property string $Total_Dana_Dibutuhkan
 * @property int $Status
 *
 * @property Status $status
 */
class DanaBulanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dana_bulanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Bulan', 'Total_Dana_Dibutuhkan', 'Status'], 'required'],
            [['Status'], 'integer'],
            [['Bulan', 'Total_Dana_Dibutuhkan'], 'string', 'max' => 20],
            [['Status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['Status' => 'status_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Dana_Bulanan' => 'Id Dana Bulanan',
            'Bulan' => 'Bulan',
            'Total_Dana_Dibutuhkan' => 'Total Dana Dibutuhkan',
            'Status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['status_id' => 'Status']);
    }
}
