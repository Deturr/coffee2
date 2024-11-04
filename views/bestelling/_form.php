<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Bestelling $model */
/** @var yii\widgets\ActiveForm $form */
$medewerkerList = ArrayHelper::map($medewerkers,'id','naam');
?>

<div class="bestelling-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medewerker_id')->dropDownList($medewerkerList, ['prompt' => ''])->label('Medewerker') ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'besteld' => 'Besteld', 'klaar' => 'Klaar', 'geleverd' => 'Geleverd', ], ['prompt' => '']) ?>

    <!--<?= $form->field($model, 'timestamp')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php // Toby Emeboh?>
</div>
