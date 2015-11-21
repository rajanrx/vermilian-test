<?php
use app\models\db\Comment;
?>

<h2 class="col-sm-8 col-sm-offset-2" style="padding-left:0;color:grey; ">Vermilian Test</h2>

<div class="row">
    <div class="col-sm-12">
        <?= $form ?>
    </div>
</div>

<div class="row" id="js-comment-list">
    <?php if (!count($comments)) { ?>
        <div class="col-sm-8 js-no-comment col-sm-offset-2 block-box">
            <p> No comments yet ! Be the first one to add new comment.</p>
        </div>
    <?php }
    else { ?>
        <?php foreach ($comments as $comment){
            /* @var Comment $comment */
            echo $this->render('__partial_comment',[
                'comment' => $comment
            ])
        ?>

        <?php } ?>

    <?php } ?>

</div>