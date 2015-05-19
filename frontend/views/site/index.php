<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
$this->title = '蜜柚相亲';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">


    <div class="site-login">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to login:</p>
           <?php $form = ActiveForm::begin();?>

                <?=$form->field($model,'gender')->radioList(['1'=>'男','0'=>'女'],['class'=>'genderlist'])?>
                <?=$form->field($model,'birthyear')->dropDownList(["prompt"=>"请选择"],["style"=>"width:120px"])?>
                <?=$form->field($model,'address')->dropDownList(["prompt"=>"请选择"],["style"=>"width:120px"])?>

                <?=Html::submitButton('注册',["class"=>"btn btn-primary","name"=>"submit-button"])?>
            <?php $form = ActiveForm::end();?>



    </div>
</div>
<style>

</style>
