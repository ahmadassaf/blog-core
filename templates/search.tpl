{config_load file="main.conf"}

{if $search.posts}
	
	{foreach from=$search.posts item='post' name='search_posts'}	
	
	<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="archive_item {if $post.post_thumbnail eq ''} post_preview_imageless {/if} post_preview" >  
		
		<!-- Article Schema.org Metadata -->
		<meta itemprop="thumbnailUrl" content="{$post.post_thumbnail_meta}" />
		<meta itemprop="sameAs url" content="{$post.post_permalink}"/>
		<meta itemprop="description" content="{$post.post_excerpt|strip_tags:false}" />
		<!-- End Article Metadata -->
		
		<a class="image" href="{$post.post_permalink}" >
			<img src="{#preloader#}" onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');" data-src="{$post.post_thumbnail}" alt="{$post.post_title|strip_tags}"/>
		</a>
		<article class="post">
			<h3 itemprop="name headline" class="title"> 
				<a href="{$post.post_permalink}" rel="bookmark">{$post.post_title nofilter}</a> 
			</h3> 
			<div class="categories" itemprop="articleSection">
				<ul class="post-categories">
					{foreach from=$post.post_categories item='cateogry' name='cateogries_array'}
					<li>
						<a rel='category' itemprop='articleSection' href='{$cateogry.link}'>{$cateogry.name}</a>
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


{else}
	<div class="textbanner">
	    <q>Sorry, We Could not find any relevant results ... </q>   
	</div> 
{/if}

