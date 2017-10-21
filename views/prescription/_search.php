<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrescriptionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prescription-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'appointment_id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'diseases') ?>

    <?= $form->field($model, 'Rx') ?>

    <?= $form->field($model, 'indication') ?>

    <?php // echo $form->field($model, 'advices') ?>

    <?php // echo $form->field($model, 'first_visit_date') ?>

    <?php // echo $form->field($model, 'revisit_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
