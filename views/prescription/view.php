<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Prescription */

$this->title = $model->appointment_id;
$this->params['breadcrumbs'][] = ['label' => 'Prescriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prescription-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?php if(Yii::$app->user->can('doctor')): ?>
        <?= Html::a('Update', ['update', 'id' => $model->appointment_id], ['class' => 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->user->can('admin')): ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->appointment_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    <?php endif; ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'appointment_id',
            'doctor.name',
            'patient.name',
            'patient.age',
            'diseases:ntext',
            'Rx:ntext',
            'indication:ntext',
            'advices:ntext',
            'first_visit_date',
            'revisit_date',
        ],
    ]) ?>

</div>
