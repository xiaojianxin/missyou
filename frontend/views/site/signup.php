<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <ul class="personalinfo">
                <li class="information">
                    <span style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: bold">Gender:<?=$gender ?></span>
                </li>
                <li class="information">
                    <span style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: bold">Address:<?=$address ?></span>
                </li>
                <li class="information">
                    <span style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: bold">Birthday:<?=$year?>年<?=$month?>月<?=$day?>日</span>
                </li>

            </ul>

                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
