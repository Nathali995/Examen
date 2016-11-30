<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput(['value' =>Yii::$app->user->identity->id,]) ?>

    <?= $form->field($model, 'idD')->dropDownList(['1' =>'deparatamento_1', '2' =>'departamento_2']) ?>

    <?= $form->field($model, 'nombreP')->textInput(['maxlength' => true, 'value' =>Yii::$app->user->identity->username,'enable' => false]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
