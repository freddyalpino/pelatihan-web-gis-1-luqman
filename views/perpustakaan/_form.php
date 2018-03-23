<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Perpustakaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perpustakaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idperpust')->textInput() ?>

    <?= $form->field($model, 'waktukunjung')->textInput() ?>

    <?= $form->field($model, 'tanggalkunjung')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
