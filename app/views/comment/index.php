<?php
use app\models\db\Comment;
?>
<div class="row">
    <div class="col-sm-12">
        <?= $form ?>
    </div>
</div>

<div class="row" id="js-comment-list">
    <?php if (!count($comments)) { ?>
        <div class="col-sm-12" class="js-no-comment">
            <p> No comments yet ! <a href="#">Add more</a></p>
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