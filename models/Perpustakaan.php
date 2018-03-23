<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perpustakaan".
 *
 * @property int $idperpust
 * @property string $waktukunjung
 * @property string $tanggalkunjung
 */
class Perpustakaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perpustakaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idperpust', 'waktukunjung', 'tanggalkunjung'], 'required'],
            [['idperpust'], 'default', 'value' => null],
            [['idperpust'], 'integer'],
            [['waktukunjung', 'tanggalkunjung'], 'safe'],
            [['idperpust'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idperpust' => 'Idperpust',
            'waktukunjung' => 'Waktukunjung',
            'tanggalkunjung' => 'Tanggalkunjung',
        ];
    }
}
