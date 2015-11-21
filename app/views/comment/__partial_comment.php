<?php
use app\models\db\Comment;
/* @var Comment $comment */
?>
<div class="col-sm-8 col-sm-offset-2">
    <div class="col-sm-6">
        <p><label>Author:</label> <span><?= $comment->name ?> (<?= $comment->email ?>)</span></p>
    </div>
    <div class="col-sm-6">
        <p>
             <span class="pull-right"><?= date('h:i A - d M, Y',strtotime($comment->date)) ?></span>
        </p>
    </div>

    <div class="col-sm-12">
        <p><?= $comment->comment ?></p>
    </div>
    <div class="col-sm-12"><p><label>Source:</label> <span><?= $comment->ipAddress ?> <?= $comment->userAgent ?></span></p></div>




</div>