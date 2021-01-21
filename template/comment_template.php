<?php 
function comment_template($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>">
            <div class="comment-author vcard">
                <?php echo get_avatar($comment,$size='48'); ?>
 
                <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
            </div>
 
            <?php if ($comment->comment_approved == '0') : ?>
            <em><?php _e('Your comment is awaiting moderation.') ?></em>
            <br />
            <?php endif; ?>
 
            <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>
 
            <?php
            $rate = get_comment_meta($comment->comment_ID, 'rate');
            if ($rate[0] <> '') {
                _e('Grade: ');
                echo movie_grade($rate[0]);
            }
            ?>
 
            <?php comment_text() ?>
 
            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
        </div>

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
<?php
}