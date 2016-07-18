<?php /* Smarty version Smarty-3.1.15, created on 2014-07-05 15:59:15
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/YARPP.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193189506153b820d3a2b486-26841673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7d6c545e910825fb2a6409e4d11f682f3f2cce' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/YARPP.tpl',
      1 => 1401983886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193189506153b820d3a2b486-26841673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'tag' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b820d3a94381_18248231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b820d3a94381_18248231')) {function content_53b820d3a94381_18248231($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
	<div class="YARPP_wrapper">
		<h2 class="posts_list_title">You might be also interested in</h2>		
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value['posts_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

			<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="post_preview" >  
			
				<!-- Article Schema.org Metadata -->
				<meta itemprop="thumbnailUrl" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_thumbnail_meta'];?>
" />
				<meta itemprop="sameAs url" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
"/>
				<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_excerpt'], ENT_QUOTES, 'UTF-8', true);?>
"/>
				<!-- End Article Metadata -->

				<a class="image" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
" >
					<img src="<?php echo $_smarty_tpl->getConfigVariable('preloader');?>
" onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');" data-src="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
"/>
				</a>
				<article class="post">
					<h3 itemprop="name headline" class="title"> 
						<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</a> 
					</h3> 
					<div class="tags_container">
						<span class="tags">
							<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['post_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tags_array']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
							<a rel='tag' itemprop='keywords' href='<?php echo $_smarty_tpl->tpl_vars['tag']->value['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
							<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tags_array']['last']) {?>-<?php }?>
							<?php } ?>	
						</span>
					</div> 
				</article>
			</div>
		<?php } ?>  
	</div>
</div> 
	<div class="post_tags">
		Tagged
		<span class="tags">
		  <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['post']['post_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tags_array']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
		  <a rel='tag' itemprop='keywords' href='<?php echo $_smarty_tpl->tpl_vars['tag']->value['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
		  <?php } ?>  
		</span>
	</div> 
  </div>
</div>
<?php } else { ?>
</div> 
	<div class="post_tags">
		Tagged
		<span class="tags">
		  <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['post']['post_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tags_array']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
		  <a rel='tag' itemprop='keywords' href='<?php echo $_smarty_tpl->tpl_vars['tag']->value['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
		  <?php } ?>  
		</span>
	</div> 
  </div>
</div>
<?php }?>


<?php }} ?>
