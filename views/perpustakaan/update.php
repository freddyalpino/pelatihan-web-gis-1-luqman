<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perpustakaan */

$this->title = 'Update Perpustakaan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idperpust, 'url' => ['view', 'id' => $model->idperpust]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
