<?php
/**
 * Template part for displaying the footer section of posts.
 * For example, put your copyright notice here.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since added by Vincent Zhang
 */

?>

<aside class="entry__copyright">
  <a class="entry__copyright__link" href="<?php the_permalink(); ?>">《<?php single_post_title(); ?>》</a>首发于 <a class="entry__copyright__link" href="<?= esc_url(home_url('/')); ?>">Karuto 的博客</a>。
  如果你喜欢我的文章，欢迎订阅我的
  <a class="entry__copyright__link" target="_blank" href="//eepurl.com/c8ysuj">邮件推送</a>，这样每当我有新内容，会第一时间寄给你，这样你就永远不用再专门来这里了。
</aside>