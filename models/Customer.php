<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/1
 * Time: 23:32
 */
namespace app\models;

use yii\db\ActiveRecord;

class Customer extends ActiveRecord
{

    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['customer_id' => 'id'])->asArray()->all();
    }
    public function rules()
    {
        return [
            ['id', 'integer'],
            ['title', 'string', 'length' => [0, 5]],
        ];
    }
}
