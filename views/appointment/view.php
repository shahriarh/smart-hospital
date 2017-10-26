<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Appointment Details</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <tr>
                    <th>Appointment Number</th>
                    <td><?=$model->id ?></td>
                </tr>
                <tr>
                    <th>Patient Name</th>
                    <td><?=$model->patient['name'] ?></td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td><?=$model->department['name'] ?></td>
                </tr>
                <tr>
                    <th>Disease</th>
                    <td><?=$model->disease['name'] ?></td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td><?=$model->details ?></td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td><?=$model->created_at ?></td>
                </tr>
                    <th>Updated At</th>
                    <td><?=$model->updated_at ?></td>
                </tr>
            </table>
        </div>
    </div>

</div>
