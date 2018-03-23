<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id_mhs
 * @property string $name
 * @property string $prodi
 * @property string $fakultas
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'prodi', 'fakultas'], 'required'],
            [['name', 'prodi', 'fakultas'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mhs' => 'Id Mhs',
            'name' => 'Name',
            'prodi' => 'Prodi',
            'fakultas' => 'Fakultas',
        ];
    }
}
