<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penggunaan_anggaran".
 *
 * @property int $Id_Penggunaan_Anggaran
 * @property string $kode
 * @property string $nama
 * @property int $total_diajukan
 * @property string $snoozed_WR2
 * @property string $WR2
 * @property string $tanggal_persetujuan_WR2
 * @property string $batas_tanggal_persetujuan_WR2
 * @property string $snoozed_controller
 * @property string $batas_tanggal_persetujuan_controller
 * @property string $tanggal_persetujuan_controller
 * @property string $controller
 * @property string $snoozed_keuangan
 * @property string $batas_tanggal_persetujuan_keuangan
 * @property string $taggal_persetujuan_keuangan
 * @property string $keuangan
 * @property string $snoozed_atasan
 * @property string $batas_tanggal_persetujuan_atasan
 * @property string $tanggal_persetujuan_atasan
 * @property string $atasan
 * @property string $verifikasi
 */
class PenggunaanAnggaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penggunaan_anggaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'snoozed_WR2', 'WR2', 'tanggal_persetujuan_WR2', 'batas_tanggal_persetujuan_WR2', 'snoozed_controller', 'batas_tanggal_persetujuan_controller', 'tanggal_persetujuan_controller', 'controller', 'snoozed_keuangan', 'batas_tanggal_persetujuan_keuangan', 'taggal_persetujuan_keuangan', 'keuangan', 'snoozed_atasan', 'batas_tanggal_persetujuan_atasan', 'tanggal_persetujuan_atasan', 'atasan', 'verifikasi'], 'required'],
            [['total_diajukan'], 'integer'],
            [['tanggal_persetujuan_WR2', 'total_diajukan', 'batas_tanggal_persetujuan_WR2', 'batas_tanggal_persetujuan_controller', 'tanggal_persetujuan_controller', 'batas_tanggal_persetujuan_keuangan', 'taggal_persetujuan_keuangan', 'batas_tanggal_persetujuan_atasan', 'tanggal_persetujuan_atasan'], 'safe'],
            [['kode'], 'string', 'max' => 8],
            [['nama', 'total_diajukan', 'verifikasi'], 'string', 'max' => 20],
            [['snoozed_WR2', 'WR2', 'snoozed_controller', 'controller', 'snoozed_keuangan', 'keuangan', 'snoozed_atasan', 'atasan'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Penggunaan_Anggaran' => 'Id Penggunaan Anggaran',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'total_diajukan' => 'Total Diajukan',
            'snoozed_WR2' => 'Snoozed Wr2',
            'WR2' => 'Wr2',
            'tanggal_persetujuan_WR2' => 'Tanggal Persetujuan Wr2',
            'batas_tanggal_persetujuan_WR2' => 'Batas Tanggal Persetujuan Wr2',
            'snoozed_controller' => 'Snoozed Controller',
            'batas_tanggal_persetujuan_controller' => 'Batas Tanggal Persetujuan Controller',
            'tanggal_persetujuan_controller' => 'Tanggal Persetujuan Controller',
            'controller' => 'Controller',
            'snoozed_keuangan' => 'Snoozed Keuangan',
            'batas_tanggal_persetujuan_keuangan' => 'Batas Tanggal Persetujuan Keuangan',
            'taggal_persetujuan_keuangan' => 'Taggal Persetujuan Keuangan',
            'keuangan' => 'Keuangan',
            'snoozed_atasan' => 'Snoozed Atasan',
            'batas_tanggal_persetujuan_atasan' => 'Batas Tanggal Persetujuan Atasan',
            'tanggal_persetujuan_atasan' => 'Tanggal Persetujuan Atasan',
            'atasan' => 'Atasan',
            'verifikasi' => 'Verifikasi',
        ];
    }
}
