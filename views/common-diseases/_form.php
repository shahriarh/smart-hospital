<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Department;

/* @var $this yii\web\View */
/* @var $model app\models\CommonDiseases */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="common-diseases-form">

    <?php $form = ActiveForm::begin(); ?>
	
	

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assigned_department')->textInput() ?>
	<?php echo $form->field($model, "assigned_department")->dropdownList(
		Department::find()->select(['name', 'id'])->asArray()->indexBy('id')->column(),
		['prompt'=>'Select Department']
		);
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
	

</div>
