<div class="post_header">   
  <h1 class="postTitle" itemprop="name headline">{$index.post.post_title}</h1>
  <div class="post_metaInformation" data-word-count="{$index.post.post_wordCount}">   
	<span class="post_categories" itemprop="articleSection">
		{foreach from=$index.post.post_categories item='cateogry' name='cateogries_array'}
		<a rel='category tag' itemprop='articleSection' href='{$cateogry.link}'>{$cateogry.name}</a>
		{/foreach}
	</span>  
    <span class="published_date" itemprop="datePublished"><i class="icon-clock"></i>&nbsp;{$index.post.post_published_date}</span>        
	<a class="comments_count" href="#comments">
	<i class="icon-chat"></i>
      {$index.post.post_comments}
    </a>  
		{if $index.series}
		<div class="post_series">
		<div class="series_title">This post is part of the series 
			<span class="series_name">{$index.series.series_title}</span>
		</div>
		<div class="series_list">
		{$index.series.series_members nofilter}
		</div>
		</div>
	{/if}
	{include file='post_toolbar.tpl'}
  </div> 
</div>