{config_load file="main.conf"}

{if $posts}
	<div class="YARPP_wrapper">
		<h2 class="posts_list_title">You might be also interested in</h2>		
		{foreach $posts.posts_array as $post}

			<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="post_preview" >  
			
				<!-- Article Schema.org Metadata -->
				<meta itemprop="thumbnailUrl" content="{$post.post_thumbnail_meta}" />
				<meta itemprop="sameAs url" content="{$post.post_permalink}"/>
				<meta itemprop="description" content="{$post.post_excerpt|escape:'html'}"/>
				<!-- End Article Metadata -->

				<a class="image" href="{$post.post_permalink}" >
					<img src="{#preloader#}" onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');" data-src="{$post.post_thumbnail}" alt="{$post.post_title}"/>
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
			</div>
		{/foreach}  
	</div>
</div> 
	<div class="post_tags">
		Tagged
		<span class="tags">
		  {foreach from=$index.post.post_tags item='tag' name='tags_array'}
		  <a rel='tag' itemprop='keywords' href='{$tag.link}'>{$tag.name}</a>
		  {/foreach}  
		</span>
	</div> 
  </div>
</div>
{else}
</div> 
	<div class="post_tags">
		Tagged
		<span class="tags">
		  {foreach from=$index.post.post_tags item='tag' name='tags_array'}
		  <a rel='tag' itemprop='keywords' href='{$tag.link}'>{$tag.name}</a>
		  {/foreach}  
		</span>
	</div> 
  </div>
</div>
{/if}


