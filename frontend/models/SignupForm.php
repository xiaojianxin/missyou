<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $gender;
    public $email;
    public $password;
    public $year;
    public $month;
    public $day;
    public $address;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['gender', 'required'],
            ['gender', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This gender has already been taken.'],

            ['address', 'required'],

            ['address', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This address has already been taken.'],
            ['year', 'required'],
            ['month', 'required'],
            ['day', 'required'],


            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()){
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->gender = $this->gender;
            $user->setPassword($this->password);
            $user->address = $this->address;
            $user->birthday = $this->year.$this->month.$this->day;
            $user->generateAuthKey();
            if ($user->save()) {
                //echo "111";
                return $user;
            }
        }

        return null;
    }


}
