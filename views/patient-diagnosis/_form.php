<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PatientDiagnosis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-diagnosis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'diagnosis_id')->textInput() ?>

    <?= $form->field($model, 'prescription_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'diag_pending' => 'Diag pending', 'diag_complete' => 'Diag complete', 'rep_pending' => 'Rep pending', 'rep_published' => 'Rep published', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'report')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
