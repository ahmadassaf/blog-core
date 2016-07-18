<div class="article-share">
	<div class="share-button">
		<i class="icon-share"></i>Share
		<span class="animate-spin total_share_counter">&#59413;</span>
	</div>         
	<div class="share-popup tooltip" style="display: none">
		<div class="share-loading">
			<i class="icon-signal"></i>Loading Share Count
			<img alt="share_loader" src="{#share_loader#}"/>
		</div>
		<script class="share_counter" type="text/x-jQuery-tmpl">
	  		<table>
				<tbody>
					{foreach from=$index.shareButton key='service' item='shareItem' name='share_array'}
					{assign var=checker value={cycle values="1,2"}}
						{if $smarty.foreach.share_array.index is even}<tr>{/if}
						    <td>
						    	<div>
						    		<a href="{$shareItem.link}" target="_blank" class="popup-link icon">
							    		<i class="icon-{$service}"></i>{$shareItem.name}
							    		<div class="digit {$service}">{literal}{{if{/literal} {$service} {literal} }} ${{/literal}{$service}{literal}} {{else}}0{{/if}}{/literal}</div>
						    		</a>
					    		</div>
				    		</td>
						{if $checker is even}</tr>{/if}
					{/foreach}
		        </tbody>
			    </table>
				<table class="extra-shares">
					<tbody>
					<tr>
							<td>
								<i class="icon-link"></i>
								<input type="text" value="{$index.post.post_permalink}" id="cp-link" onclick="this.select();" />
							</td>
							<td>
								{foreach from=$index.secondary_sharing key='secondary_service' item='secondary_shareItem' name='secondary_share_array'}
								<a href="{$secondary_shareItem.link}" target="_blank" class="popup-link icon">
									<i class="icon-{$secondary_service}"></i>{$secondary_shareItem.name}
								</a>
								{/foreach}
							</td>
						</tr>
					</tbody>
				</table>
	  	</script>
	</div>  
</div>  