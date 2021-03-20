<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'login'])->label(false) ?>

    <?= $form->field($model, 'first_name')->textInput(['placeholder' => 'Имя'])->label(false) ?>

    <?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Фамилия'])->label(false) ?>

    <?= $form->field($model, 'mail')->textInput(['placeholder' => 'Email'])->label(false) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <hr>

    <?= Html::a('Вход', ['/site/login']) ?>

</div>