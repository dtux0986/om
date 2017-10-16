<header class="o-entry-header">
	<div class="o-entry-title">
		<div class="o-item-title">
			<h4 class="o-heading">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h4>
		</div>
	</div>

	<div class="o-entry-meta">
		<div class="o-meta o-list-inline">
			<div class="o-item-meta">
				<ul>
					<li class="o-entry-author">
						<p><?php echo esc_html(get_the_author()); ?></p>
					</li>
					<li class="o-entry-category">
              <?php $categories = get_the_category(); ?>
              <?php foreach ($categories as $category) { ?>
								<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a>
              <?php } ?>
					</li>
					<li class="o-entry-date">
						<p><?php echo esc_html(get_the_date()); ?></p>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="o-entry-summary">
		<p><?php the_excerpt() ?></p>
	</div>
</header>