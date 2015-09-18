<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PEDIDOS".
 *
 * @property integer $NUMPEDIDO
 * @property string $NOMBRE
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PEDIDOS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NUMPEDIDO'], 'required'],
            [['NUMPEDIDO'], 'integer'],
            [['NOMBRE'], 'string', 'max' => 100],
            [['NUMPEDIDO'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NUMPEDIDO' => 'Numpedido',
            'NOMBRE' => 'Nombre',
        ];
    }
}
