<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Department;

/* @var $this yii\web\View */
/* @var $model app\models\Doctors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

   
	<?php echo $form->field($model, "department_id")->dropdownList(
		Department::find()->select(['name', 'id'])->asArray()->indexBy('id')->column(),
		['prompt'=>'Select Department']
		);
	 
	?>

    <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualification')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
