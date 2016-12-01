<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Registro */

$this->title = 'Update Registro: ' . $model->idR;
$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idR, 'url' => ['view', 'id' => $model->idR]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="registro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
