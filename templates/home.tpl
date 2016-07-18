{config_load file="main.conf"}

<div class="home_posts_sidebar">
	{foreach from=$home.cateogries_list key ='category_name' item='cateogry_list' name='cateogry_array'}
		<ul>
			<li class="title">{$category_name}</li>
				{foreach from=$cateogry_list item='post' name='post_entry'}
					<li class="article_listing">
						<a href="{$post.post_permalink}">{$post.post_title}</a>
					</li>
				{/foreach}
		</ul>
    {/foreach}
</div>