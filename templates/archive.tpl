{config_load file="main.conf"}

{if $archive.categories_filter}
	<div class="filters_bar">
		{foreach from=$archive.categories_filter item='category'}
			<input name="filters" type="radio" class="cat_filter" id="{$category.slug}" data-count="{$category.count}"/>
			<label class="filter_label" for="{$category.slug}">{$category.name}</label>
		{/foreach}
	</div>
{/if}


{foreach from=$archive.posts item='post' name='archive_posts'}
	<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="archive_item {if $post.post_thumbnail eq ''} post_preview_imageless {/if} post_preview {foreach from=$post.post_categories item='cateogry' name='cateogries_array'} {$cateogry.slug} {/foreach}" >

		<!-- Article Schema.org Metadata -->
		<meta itemprop="thumbnailUrl" content="{$post.post_thumbnail_meta}" />
		<meta itemprop="sameAs url" content="{$post.post_permalink}"/>
		<meta itemprop="description" content="{$post.post_excerpt}"/>
		<!-- End Article Metadata -->

		<a class="image" href="{$post.post_permalink}" >
			<img src="{#preloader#}" onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');" data-src="{$post.post_thumbnail}" alt="{$post.post_title|escape:'html'}"/>
		</a>
		<article class="post">
			<h3 itemprop="name headline" class="title">
				<a href="{$post.post_permalink}" rel="bookmark">{$post.post_title}</a>
			</h3>
			<div class="categories" itemprop="articleSection">
				<ul class="post-categories">
					{foreach from=$post.post_categories item='cateogry' name='cateogries_array'}
					<li>
						<a rel='category tag' itemprop='articleSection' href='{$cateogry.link}'>{$cateogry.name}</a>
					</li>
					{/foreach}
				</ul>
			</div>
			<div class="tags_container">
				<span class="tags">
					{foreach from=$post.post_tags item='tag' name='tags_array'}
					<a rel='tag' itemprop='keywords' href='{$tag.link}'>{$tag.name}</a>
					{if not $smarty.foreach.tags_array.last}-{/if}
					{/foreach}
				</span>
			</div>
			<div class="excerpt">{$post.post_excerpt}
				<span class="date"> <i class="icon-clock"></i>{$post.post_publish_date}</span>
			</div>
		</article>

	</div>
{/foreach}

{$archive.pagination nofilter}


