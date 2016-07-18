<?php /* Smarty version Smarty-3.1.15, created on 2014-07-05 15:59:04
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/archive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154093483153b820c88db438-27023060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765681a813d5dd7bb6a61dd71de2e69831ca851d' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/archive.tpl',
      1 => 1401980150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154093483153b820c88db438-27023060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'archive' => 0,
    'category' => 0,
    'post' => 0,
    'cateogry' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b820c89cbee1_46277801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b820c89cbee1_46277801')) {function content_53b820c89cbee1_46277801($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<?php if ($_smarty_tpl->tpl_vars['archive']->value['categories_filter']) {?>
	<div class="filters_bar">
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archive']->value['categories_filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
			<input name="filters" type="radio" class="cat_filter" id="<?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>
" data-count="<?php echo $_smarty_tpl->tpl_vars['category']->value['count'];?>
"/>
			<label class="filter_label" for="<?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</label>
		<?php } ?>
	</div>
<?php }?>


<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archive']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
	<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="archive_item <?php if ($_smarty_tpl->tpl_vars['post']->value['post_thumbnail']=='') {?> post_preview_imageless <?php }?> post_preview <?php  $_smarty_tpl->tpl_vars['cateogry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cateogry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['post_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cateogry']->key => $_smarty_tpl->tpl_vars['cateogry']->value) {
$_smarty_tpl->tpl_vars['cateogry']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['cateogry']->value['slug'];?>
 <?php } ?>" >

		<!-- Article Schema.org Metadata -->
		<meta itemprop="thumbnailUrl" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_thumbnail_meta'];?>
" />
		<meta itemprop="sameAs url" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
"/>
		<meta itemprop="description" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_excerpt'];?>
"/>
		<!-- End Article Metadata -->

		<a class="image" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
" >
			<img src="<?php echo $_smarty_tpl->getConfigVariable('preloader');?>
" onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');" data-src="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_thumbnail'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_title'], ENT_QUOTES, 'UTF-8', true);?>
"/>
		</a>
		<article class="post">
			<h3 itemprop="name headline" class="title">
				<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</a>
			</h3>
			<div class="categories" itemprop="articleSection">
				<ul class="post-categories">
					<?php  $_smarty_tpl->tpl_vars['cateogry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cateogry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['post_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cateogry']->key => $_smarty_tpl->tpl_vars['cateogry']->value) {
$_smarty_tpl->tpl_vars['cateogry']->_loop = true;
?>
					<li>
						<a rel='category tag' itemprop='articleSection' href='<?php echo $_smarty_tpl->tpl_vars['cateogry']->value['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['cateogry']->value['name'];?>
</a>
					</li>
					<?php } ?>
				</ul>
			</div>
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
			<div class="excerpt"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_excerpt'];?>

				<span class="date"> <i class="icon-clock"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['post_publish_date'];?>
</span>
			</div>
		</article>

	</div>
<?php } ?>

<?php echo $_smarty_tpl->tpl_vars['archive']->value['pagination'];?>



<?php }} ?>
