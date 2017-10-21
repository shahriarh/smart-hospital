<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Patient;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-form">

    <?php $form = ActiveForm::begin(); ?>
	

    <?= $form->field($model, 'patient_id')->textInput() ?>
	<?php echo $form->field($model, "[patient_id")->dropdownList(
	  Patient::find()->select(['name', 'id'])->asArray()->indexBy('id')->column(),
	  ['prompt'=>'Select Patient']
	  );
	 ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'disease_id')->textInput() ?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
