<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerpustakaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perpustakaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Perpustakaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idperpust',
            'waktukunjung',
            'tanggalkunjung',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
