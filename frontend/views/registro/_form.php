<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Registro */
/* @var $form yii\widgets\ActiveForm */
$productos = Yii::$app->db->createCommand('SELECT idP,nombreP, precio FROM producto')->queryAll();
$size = count($productos);


?>

<div class="registro-form">

    <?php $form = ActiveForm::begin(); ?>
            
 <?= $form->Field($model, 'uid')->textInput(['value'=>Yii::$app->user->identity->id,'type'=>"hidden",])->label(false); ?>
<?= $form->field($model, 'idP')->radioList(['1'=>'Café  $','2'=>'Té  $','3'=>'Cola   $2.5'],array('separator'=>' ',
'labelOptions'=>array('style'=>'display:inline'),))->label('Bebidas'); ?>
    <div class="form-group">
        <?= Html::submitButton('Create', ['btn btn-success']) ?>
    </div>
    <?php 
   
    
               
    ActiveForm::end(); ?>

</div>
