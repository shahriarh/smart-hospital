<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PatientDiagnosis */

$this->title = 'Create Patient Diagnosis';
$this->params['breadcrumbs'][] = ['label' => 'Patient Diagnoses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-diagnosis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
