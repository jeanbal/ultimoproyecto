<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "COUNTRY".
 *
 * @property string $CODE
 * @property string $NAME
 * @property string $POPULATION
 */
class COUNTRY extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'COUNTRY';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CODE', 'NAME'], 'required'],
            [['CODE'], 'string', 'max' => 2],
            [['NAME'], 'string', 'max' => 52],
            [['POPULATION'], 'string', 'max' => 11],
            [['CODE'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CODE' => 'Code',
            'NAME' => 'Name',
            'POPULATION' => 'Population',
        ];
    }
}
