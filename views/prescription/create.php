<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prescription */

$this->title = 'Create Prescription';
$this->params['breadcrumbs'][] = ['label' => 'Prescriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prescription-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
