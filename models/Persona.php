<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PERSONA".
 *
 * @property integer $ID_PERSONA
 * @property string $NOMBRE
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PERSONA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PERSONA'], 'integer'],
            [['NOMBRE'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PERSONA' => 'Id  Persona',
            'NOMBRE' => 'Nombre',
        ];
    }
}
