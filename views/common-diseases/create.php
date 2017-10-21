<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CommonDiseases */

$this->title = 'Create Common Diseases';
$this->params['breadcrumbs'][] = ['label' => 'Common Diseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-diseases-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
