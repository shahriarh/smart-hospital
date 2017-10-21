<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Patient;
use app\models\Department;
use app\models\CommonDiseases;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?php echo $form->field($model, "patient_id")->dropdownList(
		Patient::find()->select(['name', 'id'])->asArray()->indexBy('id')->column(),
		['prompt'=>'Select Patient']
		);
	?>
	
	<?php echo $form->field($model, "department_id")->dropdownList(
		Department::find()->select(['name', 'id'])->asArray()->indexBy('id')->column(),
		['prompt'=>'Select Department']
		);
	?>
	
	<?php echo $form->field($model, "disease_id")->dropdownList(
		CommonDiseases::find()->select(['name', 'id'])->asArray()->indexBy('id')->column(),
		['prompt'=>'Select Disease']
		);
	?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'updated_at')->textInput(['type' => 'date']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
