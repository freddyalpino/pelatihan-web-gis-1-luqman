<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perpustakaan */

$this->title = 'Create Perpustakaan';
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
