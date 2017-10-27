<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prescription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prescription-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'appointment_id')->hiddenInput()->label(false) ?>
	
    <?= $form->field($model, 'doctor_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'patient_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'diseases')->textarea(['rows' => 6]) ?>
	
    <?= $form->field($model, 'investigation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Rx')->textarea(['rows' => 6]) ?>
	
	
	<div class="row">
		<div class="col-md-6">
			<?= $form->field($model, 'indication')->textarea(['rows' => 6]) ?>
		</div>
		<div class="col-md-6">
			<?= $form->field($model, 'advices')->textarea(['rows' => 6]) ?>
		</div>	
	</div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
