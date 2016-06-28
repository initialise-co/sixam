<?php $category = get_the_category(); ?>
<div class="category">
	<?php if($category[0]->parent != 0){ ?>
	<?php $parent_category = get_category($category[0]->parent); ?>
		<a href="<?php echo get_category_link($parent_category->cat_ID); ?>"><?php echo $parent_category->name; ?></a>
	<?php } ?>
	<a href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category[0]->name; ?></a>
</div>
