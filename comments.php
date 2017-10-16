<?php
    /**
     * Index Page
     *
     * @package om
     */
?>

<div class="o-comments">
	<div class="o-comments__inner">
		<div class="o-comments-count">
			<h6 class="o-heading">
          <?php comments_number(); ?>
			</h6>
		</div>
		<div class="o-comments-list">
			<ul>
          <?php
              wp_list_comments(
                  array(
                      'style'       => 'ul',
                      'callback'    => null,
                      'avatar_size' => 100,
                  )
              );
          ?>
			</ul>
		</div>
		<div class="o-comments-form">
        <?php comment_form(); ?>
		</div>
	</div>
</div>

