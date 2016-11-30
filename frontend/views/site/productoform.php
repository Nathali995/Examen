<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
use app\models\Registro;
?>

<div class="site-Formulario" >
    <h1>PRODUCTOS</h1><br>
    <?php $form = ActiveForm::begin(); ?>
    <?php

    $producto = \backend\models\Producto::find()->asArray()->all();
    echo Yii::$app->user->identity->username;
      echo '<br>';
    foreach ($producto as $j):
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        . '<input name="idP' . $j['idP'] . '" value="1' . $j['nombreP'] . '" type="radio" required> ' . '<br>';
    endforeach;
    echo '<br>';
    ?> 
    <div class="form-group">
        <?= Html::submitButton('OK', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>       
</div>
