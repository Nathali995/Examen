<?php
use app\models\Registro;


/* @var $this yii\web\View */
$this->title = 'Confirmacion';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="registo-index">

<div class="body-content">

    <?php
        //consulto el nuevo saldo
        $saldosql="select saldo from persona where id_user=$model->uid";
            $saldo = Yii::$app->db->createCommand($saldosql)->execute();
            echo 'ud tiene un saldo por pagar de '.$saldo.' dolares';
 
            ?>
              </div>
</div>