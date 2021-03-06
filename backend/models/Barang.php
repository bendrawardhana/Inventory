<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $kode_barang
 * @property string $nama_barang
 * @property int $stok_barang
 * @property string $satuan
 * @property int $harga
 * @property string $kategori_barang
 *
 * @property Barangkeluar[] $barangkeluars
 * @property Barangmasuk[] $barangmasuks
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stok_barang', 'harga'], 'integer'],
            [['satuan'], 'required'],
            [['nama_barang'], 'string', 'max' => 45],
            [['satuan'], 'string', 'max' => 5],
            [['kategori_barang'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'stok_barang' => 'Stok Barang',
            'satuan' => 'Satuan',
            'harga' => 'Harga',
            'kategori_barang' => 'Kategori Barang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangkeluars()
    {
        return $this->hasMany(Barangkeluar::className(), ['kode_barang' => 'kode_barang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangmasuks()
    {
        return $this->hasMany(Barangmasuk::className(), ['kode_barang' => 'kode_barang']);
    }
}
