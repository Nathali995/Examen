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
<?php for($i=0; $i<$size; $i++)
		{
			$fila = $productos[$i];
                        $idP=$fila["idP"];
			$nombreP =$fila["nombreP"];
			$precio =$fila["precio"];
                     
		?>
    <?= $form->field($model, 'idP')->radioList([$idP=>$nombreP.' $'.$precio,])->label(false);?>
<?php   if(!empty($model->idP))
        {
            $model->idP=$model->idP;
        }
                }
                
                 
                ?>
    <div class="form-group">
        <?= Html::submitButton('Create', ['btn btn-success']) ?>
    </div>
    <?php 
   
    
    ActiveForm::end(); ?>

</div>
