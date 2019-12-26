

<div class="comments" id="comments" style="text-align: left;">
	<div class="comments__head">Комментарии <span class="news__counter"><?php echo $total_comments; ?></span></div>


<?php for ($k = 0; $k < $total_comments; $k++): ?>
    <div class="comments__container" style="overflow-wrap: break-word; word-wrap: break-word; word-break: normal; line-break: auto; hyphens: manual;">
        <div class="comment  commentContainer " >
            <div class="comment__info">
                <div class="comment__rating commentVoting">

                    <span class="comment__rating-value posweight"><?php echo $comments[$k]['datetime_com'][1]; ?></span>

                </div>
                <span class="comment__author"><?php echo strip_tags($comments[$k]['login']); ?></span>,
                <span class="comment__time"><?php echo $comments[$k]['datetime_com'][0]; ?></span>
            </div>
            <p class="comment__content"><?php echo nl2br(strip_tags($comments[$k]['text_com'])); ?></p>
        </div>
    </div>
    <div style="margin: 0 0 30px 0;">&nbsp;</div>
<?php endfor; ?>





<?php if($com_form):?>
    <div class="commentFormContainer" id="commentformcontainer">

        <div class="comments__head">Написать комментарий (<?php echo $_SESSION['login'] ?>)
            <button type="button" id="commentFormClose" class="icon-cancel" style="float: right; display: none;"></button>
        </div>

        <div class="comments__write">

            <div class="comments__input">
                <label for="in_comment">Комментарий</label>
                <form method="POST" action="<?php echo $main_name; ?><?php echo $page['url']; ?>">
                    <textarea name="text_com"  cols="" rows="10" maxlength="1000"></textarea>
                    <button class="comments__submit" id="commentFormSubmit">Отправить</button>
                    <span class="comments__info-text"><b></b></span>
                </form>

            </div>
        </div>
    </div>
<?php else:?>
    <div class="commentFormContainer" id="commentformcontainer">

        <div class="comments__head">Логин и пароль
            <button type="button" id="commentFormClose" class="icon-cancel" style="float: right; display: none;"></button>
        </div>

        <div class="comments__write">

            <form method="POST" action="<?php echo $main_name; ?><?php echo $page['url']; ?>">
                <div class="comments__input is-marked">
                    <i class="icon-comment"></i>
                    <label for="in_author">Логин</label>
                    <input type="text" name="login" id="in_author" maxlength="20">
                </div>
                <div class="comments__input">
                    <label>Пароль</label>
                    <input type="password" name="pass" maxlength="20">
                    <span class="comments__info-text">Запомните логин и пароль для последующего входа</span>
                    <span class="comments__info-text"><b></b></span>
                </div>
                <div class="comments__input">
                    <button class="comments__submit" id="commentFormSubmit">Войти или зарегистрироваться</button>
                </div>
            </form>

        </div>
    </div>

<?php endif; ?>

<div id="commentFormProgressPanel" style="display:none; position: absolute; top:0; left:0; background-color: #F6F6F6;"> </div>


<!-- <img border="0" title="Loading..." alt="" src="/images/ajax-loader.gif" id="progressimage" style="display:none; position: absolute; margin:0; padding:0; border:0;"/> -->
</div>
