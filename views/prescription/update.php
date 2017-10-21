<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prescription */

$this->title = 'Update Prescription: ' . $model->appointment_id;
$this->params['breadcrumbs'][] = ['label' => 'Prescriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->appointment_id, 'url' => ['view', 'id' => $model->appointment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prescription-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
