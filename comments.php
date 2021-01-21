<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'twentyseventeen' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'twentyseventeen'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'style'       => 'ol',
						'short_ping'  => true,
						// 'reply_text'  => twentyseventeen_get_svg( array( 'icon' => 'mail-reply' ) ) . __( 'Reply', 'twentyseventeen' ),
					)
				);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				// 'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
				// 'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
			)
		);

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyseventeen' ); ?></p>
		<?php
	endif;

	comment_form();
	?>
	<div>
    <div class="comment-rating">
        <ul class="star-rating">
            <li><a href="#" title="<?php _e('Zero - 0 stars'); ?>" class="zero-star" onclick="rateClick(0); return false;">0</a></li>
            <li><a href="#" title="<?php _e('Really bad - 1 star'); ?>" class="one-star" onclick="rateClick(1); return false;">1</a></li>
            <li><a href="#" title="<?php _e('Bad - 2 stars'); ?>" class="two-stars" onclick="rateClick(2); return false;">2</a></li>
            <li><a href="#" title="<?php _e('Good - 3 stars'); ?>" class="three-stars" onclick="rateClick(3); return false;">3</a></li>
            <li><a href="#" title="<?php _e('Very good - 4 stars'); ?>" class="four-stars" onclick="rateClick(4); return false;">4</a></li>
            <li><a href="#" title="<?php _e('Excellent - 5 stars'); ?>" class="five-stars" onclick="rateClick(5); return false;">5</a></li>
        </ul>
    </div>
    <?php _e('Your rate'); ?>
    <input type="hidden" name="rate" id="rate" value="<?php echo esc_attr($comment_author_rate); ?>" />
</div>

</div><!-- #comments -->


