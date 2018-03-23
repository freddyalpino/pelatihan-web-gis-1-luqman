<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Kelas".
 *
 * @property int $idclass
 * @property string $room
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room'], 'required'],
            [['room'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idclass' => 'Idclass',
            'room' => 'Room',
        ];
    }
}
