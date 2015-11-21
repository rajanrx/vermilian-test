<?php
/**
 * Created by PhpStorm.
 * User: rajan
 * Date: 21/11/2015
 * Time: 11:03 AM
 */

namespace app\models\db;


use app\models\gii\Comments;
use yii\helpers\ArrayHelper;

/**
 * This class extends the generated model from gii for db operations.
 * This class will contain the business logic for comments.
 * Class Comment
 * @package app\models\db
 */
class Comment extends Comments{

    public function rules(){
        return ArrayHelper::merge(parent::rules(),[
            ['email','email'] // Email should be of type email address
        ]);
    }
}