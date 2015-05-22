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
                <?=$form->field($model,'year')->dropDownList(["prompt"=>"请选择"],["id"=>"year","style"=>"width:120px"])?>
                <?=$form->field($model,'month')->dropDownList(["prompt"=>"请选择"],["id"=>"month","style"=>"width:120px"])?>
                <?=$form->field($model,'day')->dropDownList(["prompt"=>"请选择"],["id"=>"day","style"=>"width:120px"])?>
                <?=$form->field($model,'address')?>

                <?=Html::submitButton('SignUp',["class"=>"btn btn-primary","name"=>"submit-button"])?>
            <?php $form = ActiveForm::end();?>
           <a class="btn btn-primary" href="index.php?r=site/login" style="margin-left:330px; margin-top: -62px; ">login<a>
        <img src="/advanced/frontend/web/public/images/default.jpg" style="position: absolute;margin-top: -350px;margin-left: 250px;"/>

    </div>
</div>
<script type="text/javascript" src="/advanced/frontend/web/js/birthday.js"></script>
<script type="text/javascript">
    var selYear = window.document.getElementById("year");
    var selMonth = window.document.getElementById("month");
    var selDay = window.document.getElementById("day");

    // 新建一个DateSelector类的实例，将三个select对象传进去
    new DateSelector(selYear, selMonth, selDay,'2015','1','1');
    // 也可以试试下边的代码
    // var dt = new Date(2004, 1, 29);
    // new DateSelector(selYear, selMonth ,selDay, dt);


</script>

