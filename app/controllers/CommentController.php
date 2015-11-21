<?php
/**
 * Created by PhpStorm.
 * User: rajan
 * Date: 21/11/2015
 * Time: 10:35 AM
 */

namespace app\controllers;


use app\models\db\Comment;
use Yii;
use yii\web\Controller;
use yii\web\JqueryAsset;
use yii\web\View;

/**
 * Basic web controller for comments
 * Class CommentController
 * @package app\controllers
 */
class CommentController extends Controller {

    /**
     * Action to display the comment
     */
    public function actionIndex() {

        $params = array_merge([
          'page-size'   => 10,
          'page-offset' => 0,
        ], Yii::$app->request->get());

        $comments = Comment::find()
          ->limit($params['page-size'])
          ->offset($params['page-offset'])
          ->orderBy('date asc')
          ->all();

        echo $this->render('index', [
          'comments' => $comments,
          'form'     => $this->actionForm()
        ]);
    }

    /**
     * Action to add new comment
     * Returns the json encoded response along with the created comment
     * Returns error message in json format if it could not add a new record
     *
     * Uses $_POST params to get the required data
     */
    public function actionAddNew() {

        $params = array_merge([
          'ipAddress' => $_SERVER['REMOTE_ADDR'],
          'userAgent' => $_SERVER['HTTP_USER_AGENT'],
          'date'      => date('Y-m-d H:i:s')
        ], Yii::$app->request->post());

        try {

            $emailExists = Comment::find()
              ->where([
                'email' => $params['email']
              ])
              ->one();

            // If email has already been used then do not save the comment
            if($emailExists != null){
                echo json_encode([
                  'error'   => TRUE,
                  'params'  => $params,
                  'message' => 'Email has already been used for the comment!'
                ]);
                return;
            }

            $comment = new Comment($params);
            $comment->save();

            // Check if the comment has got some validation errors
            // If found return a json encoded error message
            if ($comment->hasErrors()) {
                echo json_encode([
                  'error'   => TRUE,
                  'params'  => $comment->errors,
                  'message' => 'Data could not be validated!'
                ]);
                return;
            }

            // Return a success message along with the created comment data
            echo json_encode([
              'success' => TRUE,
              'message' => 'Comment has been added successfully',
              'comment' => $comment->toArray()
            ]);
        } catch (\Exception $ex) {
            echo json_encode([
              'error'       => TRUE,
              'error_trace' => YII_ENV_DEV ? $ex->getTrace() : '',
                // only show error trace if the environment is in development
              'message'     => 'An error has occurred'
            ]);
            return;
        }
    }

    public function actionOne() {
        $id = Yii::$app->request->get('id');
        $comment = Comment::find()
          ->where([
            'id' => $id
          ])
          ->one();

        if($comment == null){
            throw new \Exception('Invalid comment Id');
        }

        echo $this->renderPartial('__partial_comment',[
           'comment' => $comment
        ]);
    }

    /**
     * Returns form
     * Parameters can be passed to this method via POST method
     *
     * Form could have been generated using Yii::ActiveForm (@see http://www.yiiframework.com/doc-2.0/yii-widgets-activeform.html), however, as this is a test I am coding a custom form and custom javascript
     */
    protected function actionForm() {
        $params = Yii::$app->request->post();
        Yii::$app->view->registerJsFile('/js/site.js', [
          'depends' => [
            JqueryAsset::className()
          ]
        ]);
        return $this->renderPartial('form', [
          'params' => $params
        ]);
    }
}