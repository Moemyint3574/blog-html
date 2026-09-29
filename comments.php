<?php
// パスワード保護されている記事の場合は何も表示しない
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    $args = array(

        'title_reply' => 'COMMENT BOX',

        'comment_notes_before' => '',
        'comment_notes_after'  => '',

        'fields' => array(
            'author' =>
            '<p class="comment-form-author">
                <input
                    id="author"
                    name="author"
                    type="text"
                    placeholder="お名前"
                    value=""
                    autocomplete="name"
                    required>
            </p>',

            'email' => '',

            'url' => '',

            'cookies' => '',
        ),

        // Comment field
        'comment_field' =>
        '<p class="comment-form-comment">
            <textarea
                id="comment"
                name="comment"
                placeholder="コメントを入力してください"
                cols="45"
                rows="8"
                required></textarea>
        </p>',

        // Submit
        'submit_button' =>
        '<input
            name="submit"
            type="submit"
            id="submit"
            class="submit"
            value="SUBMIT">',
    );

    comment_form($args);
    ?>

    <?php if (have_comments()) : ?>

        <h2 class="comments-title">コメント</h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol>

    <?php endif; ?>

</div>