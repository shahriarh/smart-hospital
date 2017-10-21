<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CommonDiseases */

$this->title = 'Update Common Diseases: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Common Diseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="common-diseases-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
