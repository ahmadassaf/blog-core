{config_load file="main.conf"}

<div class="postToolbar">
	{include file='post_share_button.tpl'} 
	<a class="nav-buttons toggle_socialbar" href="#social_bar">
		<i class="icon-signal"></i>Social Bar
	</a>
	{if not $index.post.next_post_link eq ''}
      <div class="nav-buttons clearfix">
		  <a href="{$index.post.next_post_link}" rel="next">Next Post
			<span class="icon-right-open"></span>
		  </a>
	  </div>
    {/if}
</div>