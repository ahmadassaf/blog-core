 {config_load file="main.conf"}

  <ol class="projects">
 	{foreach from=$home.projects item='post' name='archive_posts'}
	<li itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="archive_item {if $post.post_thumbnail eq ''} post_preview_imageless {/if} post_preview {foreach from=$post.post_categories item='cateogry' name='cateogries_array'} {$cateogry.slug} {/foreach}" >

		<!-- Article Schema.org Metadata -->
		<meta itemprop="thumbnailUrl" content="{$post.post_thumbnail_meta}" />
		<meta itemprop="sameAs url" content="{$post.post_permalink}"/>
		<meta itemprop="description" content="{$post.post_excerpt|escape:'html'}"/>
		<!-- End Article Metadata -->

		<a class="image" href="{$post.post_permalink}" >
			<img style="width:100px" src="{#preloader#}" onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');" data-src="{$post.post_thumbnail}" alt="{$post.post_title}"/>
		</a>
		<article class="post">
			<h3 itemprop="name headline" class="title">
				<a href="{$post.post_permalink}" rel="bookmark">{$post.post_title}</a>
			</h3>
			<div class="tags_container">
				<span class="tags">
					{foreach from=$post.post_tags item='tag' name='tags_array'}
					<a rel='tag' itemprop='keywords' href='{$tag.link}'>{$tag.name}</a>
					{if not $smarty.foreach.tags_array.last}-{/if}
					{/foreach}
				</span>
			</div>
		</article>

	</li>
	{/foreach}
</ol>