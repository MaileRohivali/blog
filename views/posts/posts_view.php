<?foreach ($tags as $tag):?><a href="#"><span class="label label-info"><?=$tag['tag_name']?></span></a> <?endforeach?>
<div class="background"></div>

<div id="post" class="col-xs-offset-1 col-xs-11 col-sm-offset-5 col-sm-6 col-md-offset-3 col-md-5">
    <article id="post-1001" class="active">
        <h1 class="title">
            <?=$post['post_subject']?>
            <button type="button" class="close" aria-hidden="true">×</button>
        </h1>
        <div class="post">
            <img class="post-img" src="http://d.gr-assets.com/books/1358275334l/2767052.jpg" alt="The Hunger Games">
            <p>
                <?=$post['username']?>
            </p>
            <p>
                <?=$post['post_text']?>
            </p>
        </div>
    </article>
</div>
<? foreach ($comments as $comment): ?>
<div class="commentBox">
    <ul class="commentList">
        <li>
            <div class="commenterImage">
                <img src="http://lorempixel.com/50/50/people/6" />
            </div>
            <div class="commentText">
                <?=$comment['comment_created']?>
                <?=$comment['comment_author']?>
                <p><?=$comment['comment_text']?></p>
            </div>
        </li>
    </ul>
    <form class="form-inline" method="post" role="form">
                <div class="form-group">
            <input class="form-control" type="text" placeholder="Your comments" name="data[comment_text]"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">Add</button>
        </div>
    </form>
</div>

<? endforeach ?>