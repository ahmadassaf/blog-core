<div class="headerWrapper">
    <div class="header">
        <a href="/blog" class="icon-home extra-icon">HOME</a>
        <div id="responsiveMenu" class="wrapper-dropdown" tabindex="1">
            <span>Navigation Menu</span>
            <ul class="dropdown" tabindex="1"></ul>
        </div>
        {$menu.menu nofilter}
        <div class="follow-us">
            <div class="toggle-follow-us">
            	<span class="followtext">Follow me</span>

            	<i class="icon-twitter"></i>
            	<i class="icon-rss"></i>
            	<i class="icon-angle-down"></i>

                <div class="follow-us-popup">
                    <table>
    					<tbody>
							{foreach from=$menu.contact_me key='service' item='contact' name='contact_array'}
							{assign var=checker value={cycle values="1,2"}}
								{if $smarty.foreach.contact_array.index is even}<tr>{/if}
								    <td>
								    	<div>
								    		<a href="{$contact.link}" target="_blank">
									    		<i class="icon-{$service}"></i>
									    		{$contact.name}
								    		</a>
							    		</div>
						    		</td>
								{if $checker is even}</tr>{/if}
							{/foreach}
		        		</tbody>
                    </table>
                </div>
            </div>
            <div class="icon-search extra-icon">
                <div class="sb_dropdown">
                    <form role="search" id="searchFormHeader" class="searchForm" method="get" action="{$menu.home_url}">
                        <input name="s" class="searchbox" type="text" value="" required placeholder="Search..."/>
						<input id ="cat_filter" type="hidden" name="cat" value="" />
                        <span class="submit" data-icon="&#59406;" data-spin="&#59413;" data-search="&#59406;"></span>
                    </form>
                    <ul>
                    <li class="sb_filter">Filter your search</li>
                    {foreach from=$menu.search_categories key='index' item='category' name='category_array'}
                    	<li class="cat-filter {if $category.parent eq '0'} visible {else} hidden {/if}" data-hidden="{if $category.parent eq '0'}visible{else}hidden{/if}">
                			<input id="filterCat_.{$category.ID}" type="checkbox" name="filterCat" value="{$category.ID}"/>
                      		<label for="filterCat_.{$category.ID}">{$category.name}</label>
                      	</li>
                  	{/foreach}
                    <li class="sb_filter expand_cat" data-action="expand" >+ Expand Categories</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
