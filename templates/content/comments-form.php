<?php
/**
 * Template part for displaying the comment section's "add new comment" form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since added by Vincent Zhang
 */
?>

<?php 
$logged_in_as = '<p class="comment__logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>';

$default_avatar = 'https://c.disquscdn.com/uploads/forums/128/5454/avatar92.jpg?1330293846';
$comment_content = '<div class="comment__body">';
$comment_content .= '<div class="comment__author">';
$comment_content .= '<img class="avatar" src="' . $default_avatar . '">';
$comment_content .= '</div>';
$comment_content .= '<div class="comment__content">';
$comment_content .= '<textarea class="comment__input" id="comment" name="comment" placeholder="请尽量让自己的回复能够对别人有帮助。" aria-required="true"></textarea>';
$comment_content .= '</div>';
$comment_content .= '</div>';

$fields =  array(
  'author' =>
    '<div class="comment__body"><label class="comment__input__label" for="author">' . '名字' .
    ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
    '<input class="comment__input" id="author" name="author" type="text" placeholder="名字是必填项。"value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></div>',

  'email' =>
    '<div class="comment__body"><label class="comment__input__label" for="email">' . '邮箱' .
    ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
    '<input class="comment__input" id="email" name="email" type="text" placeholder="必填但不会公开。" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></div>',

  'url' =>
    '<div class="comment__body"><label class="comment__input__label" for="url">' . '主页' . '</label>' .
    '<input class="comment__input" id="url" name="url" type="text" placeholder="主页是选填项哦！" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></div>',

  'cookies' => 
    '<div class="comment__body"><input class="comment__checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label for="wp-comment-cookies-consent" class="comment__checkbox__label">' . __( '记住我。' ) . '</label></div>',
);

/* https://codex.wordpress.org/Function_Reference/comment_form */
$comments_args = array(
  'label_submit'=>'发表留言',
  'class_submit'=> 'comment__submit',
  'title_reply' => '',
  'logged_in_as' => $logged_in_as,
  'comment_notes_before' => '',
  'comment_notes_after' => '',
  'comment_field' => $comment_content,
  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);
comment_form( $comments_args ); 
?>