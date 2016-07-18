<article class="wrap">
	<h1>Smarty and Trasnients Cache Cleaner</h1>
	<button class="button" onclick="document.clearAllCache('clear_all_caches')">Call All Smarty Caches</button>
	<button class="button" onclick="document.clearAllCache('clear_all_transients')">Call All Transients</button>
</article>
{nocache}
{foreach from=$cache_cleaner key='type' item='section' name='cached_array'}
	<h2 style="text-transform:capitalize">{$type} Transients</h2>
	<article class="cache_list" style="display: table;width: 90%;">	
		{foreach from=$section item='cached' name='cached_array'}
			<span style=" display: table;margin: 5px;"><strong>{$cached.type}</strong> ID: {$cached.ID} <strong>{$cached.name}</strong> {if $cached.page}<strong> - Page: {$cached.page}</strong>{/if}
				<a href="{$cached.link}" style="text-decoration:none;margin:0 0 0 10px">link</a>
				<a style="cursor:pointer" onclick="document.clearAllCache('clear_cache','{$cached.type}','{$cached.ID}','{$cached.page}','{$cached.name}')"> - Delete Cache</a>
				<a style="cursor:pointer" onclick="document.clearAllCache('clear_transient','{$cached.type}','{$cached.ID}','{$cached.page}','{$cached.name}')"> - Delete Transient</a>
			</span>
		{/foreach}
	</article>
{/foreach}
{/nocache}