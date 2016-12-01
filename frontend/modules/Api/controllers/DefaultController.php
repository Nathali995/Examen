<?php

namespace app\modules\Api\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController
{
    
    public $modelClass='app\models\Persona';
    
//     public function actions()
//    {
//        $actions=parent::actions();
//        unset($actions['delete'],$actions['create']);
//        return $actions;
//        }
}
