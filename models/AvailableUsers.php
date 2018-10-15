<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 13.10.2018
 * Time: 18:59
 */

namespace app\models;

use yii\db\ActiveRecord;

class AvailableUsers extends ActiveRecord
{
    public static function tableName()
    {
        return '{{User}}';
    }
}