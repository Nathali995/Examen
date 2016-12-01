<?php
use app\models\Registro;


/* @var $this yii\web\View */
$this->title = 'Confirmacion';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="registo-index">

<div class="body-content">

    <?php
    //consulto el precio del nuevo producto
    $preciosql="select precio from producto where idP=$model->idP";
            $precio = Yii::$app->db->createCommand($preciosql)->execute();
            
             $saldosql="select saldo from persona where id_user=$model->uid";
            $saldo1 = Yii::$app->db->createCommand($saldosql)->execute();
            // actualizo el saldo
        $connection=Yii::$app->db;
        $sql = "UPDATE persona SET saldo = $saldo1+$precio WHERE id_user = $model->uid";
        $command = $connection->createCommand($sql);
        $command->execute();
        
        //consulto el nuevo saldo
      //  $saldosql="select saldo from persona where id_user=$model->idP";
            $saldo = Yii::$app->db->createCommand($saldosql)->execute();
            echo 'ud tiene un saldo por pagar de '.$saldo.' dolares';
 
            ?>
              </div>
</div>