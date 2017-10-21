<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prescription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prescription-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'appointment_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'diseases')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Rx')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'indication')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'advices')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_visit_date')->textInput() ?>

    <?= $form->field($model, 'revisit_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
