<?php
use app\models\Registro;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
$productos = Yii::$app->db->createCommand('SELECT idP,nombreP, precio FROM producto')->queryAll();
$size = count($productos);

$Registro=new Registro();
?>

<div class="blog-index">

    <h1>Productos</h1><br>

    <div class="body-content">
        <?php $form = ActiveForm::begin(); ?>
	
    <div class="row">
      $Registro->uid=Yii::$app->user->identity->id;
 
            <div class="compactRadioGroup">
            <?php
                echo $form->field($Registro, 'idP')->radio(array('1'=>'uno', '2'=>'dos', )) 

            ?>
            </div>
    </div>
       
<?php ActiveForm::end(); ?>
		
    </div>
</div>

