
<?foreach( $posts as $post ):?>


    <div class="background"></div>

    <div id="post" class="col-xs-offset-1 col-xs-11 col-sm-offset-5 col-sm-6 col-md-offset-3 col-md-5">
    <article id="post-1001" class="active">
    <h1 class="title">
        <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a>
        <button type="button" class="close" aria-hidden="true">×</button>
    </h1>
    <div class="post">
        <p>
            <?=$post['post_text']?>
        </p>
        <? if(!empty($tags[$post['post_id']])): foreach ($tags[$post['post_id']] as $tag):?>
            <a href="#"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a> <?endforeach; endif?>
    </div>
</article>
</div>

<?endforeach?>

<hr/>
<?php if ($auth->logged_in == true): ?>
<form method="post">
    <input name="data[post_subject]" placeholder="Title" /><br><br>
    <textarea name="data[post_text]" id="" cols="30" rows="5" placeholder="Content"></textarea>
    <br><br>
    <button class="btn btn-default">Post</button>
</form>
<?php endif; ?>
