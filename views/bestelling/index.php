<?php

use app\models\Bestelling;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\BestellingSearcher $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bestellings';
$this->params['breadcrumbs'][] = $this->title;
$medewerkerList = ArrayHelper::map($medewerkers,'id','naam');
?>
<div class="bestelling-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bestelling', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'medewerker_id',
                  'label'     => 'Medewerker',
                'filter'    => $medewerkerList,
                'value'     => 'medewerkers.naam'
            ],
            'naam',
            'menu_id',
            'status',
            //'timestamp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Bestelling $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
