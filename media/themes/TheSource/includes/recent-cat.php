<!-- Removed "top" category block -->
<?php $thumb = '';

	$width = 239;
	$height = 133;
	$classtext = 'thumb';
	$titletext = get_the_title();

	$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
	$thumb = $thumbnail["thumb"]; ?>

<?php if ($thumb <> '') print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, $classtext); ?>

<div class="entry <?php echo($headingColor); ?>"<?php if ($thumb == '') echo(' style="padding-top: 70px;"'); ?>>
	<div class="title"<?php if ($thumb == '') echo(' style="top: 13px;"'); ?>>
	<?php $link = get_post_meta($post->ID, 'Link', true); ?>
		<h3><a href="<?php if ($link <> '') { echo $link; } else { the_permalink(); } ?>"><?php the_title(); ?></a></h3>
	</div>
	<!-- Removed post meta -->
	<p><?php truncate_post(182); ?></p>
	<a class="readmore" href="<?php if ($link <> '') { echo $link; } else { the_permalink(); } ?>">
	<?php $button = get_post_meta($post->ID, 'Button', true); ?>
	<span><?php if ($button <> '') { echo $button; } else { esc_html_e('Read more','TheSource'); } ?></span></a>
</div>