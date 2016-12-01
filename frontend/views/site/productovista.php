<?php
use frontend\models\Registro;
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
       <?php for($i=0; $i<$size; $i++)
		{
			$fila = $productos[$i];
                        $idP=$fila["idP"];
			$nombreb =$fila["nombreP"];
			$precio =$fila["precio"];
		?>
        <?php $form = ActiveForm::begin(); ?>
                <h2><?php echo $nombreb?></h2>
                <p><?php echo $precio?></p>
                
                <?= $form->field($Registro, 'idP')->radioList(['1'=>'uno', '2'=>'dos',]);?>
            <?php $Registro->uid = Yii::$app->user->identity->id; ?>
                
              
                <?php ActiveForm::end(); ?>
		<?php } ?>
		
    </div>
</div>

