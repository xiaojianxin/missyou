<?php
/**
 * Created by PhpStorm.
 * User: YUE
 * Date: 15-5-20
 * Time: 下午2:19
 */

namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;
class IndexForm extends Model{
    public $gender;
    public $year;
    public $month;
    public $day;
    public $address;


    public function rules()
    {
        return [
            ['gender', 'required'],
            ['gender', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This gender has already been taken.'],

            ['address', 'required'],
            ['address', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This address has already been taken.'],

        ];
    }
}