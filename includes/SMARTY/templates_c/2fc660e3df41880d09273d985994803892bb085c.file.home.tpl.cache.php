<?php /* Smarty version Smarty-3.1.15, created on 2014-02-24 17:36:35
         compiled from "/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1529546526530b83230a8527-16051845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fc660e3df41880d09273d985994803892bb085c' => 
    array (
      0 => '/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/home.tpl',
      1 => 1387216756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1529546526530b83230a8527-16051845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home' => 0,
    'cateogry' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_530b83231167f5_87525175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b83231167f5_87525175')) {function content_530b83231167f5_87525175($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<div class="textbanner">
	<q><?php echo $_smarty_tpl->tpl_vars['home']->value['quote'];?>
</q>   
</div>   
<article class="<?php if ($_smarty_tpl->tpl_vars['home']->value['post']['post_thumbnail']=='') {?> post_preview_imageless <?php }?> post_preview first_post" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">  

	<!-- Article Schema.org Metadata -->
	<meta itemprop="thumbnailUrl" content="<?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_thumbnail_meta'];?>
" />
	<meta itemprop="sameAs url" content="<?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_permalink'];?>
"/>
	<meta itemprop="description" content="<?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_excerpt'];?>
"/>
	<!-- End Article Metadata -->

	<a class="image" href="<?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_permalink'];?>
" >
		<img src="<?php echo $_smarty_tpl->getConfigVariable('preloader');?>
"onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');" data-src="<?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_title'];?>
"/>
	</a>
	<article class="post">
		<h3 itemprop="name headline" class="title"> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_permalink'];?>
" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_title'];?>
</a> 
		</h3> 
		<span class="categories" itemprop="articleSection">
			<ul class="post-categories">
				<?php  $_smarty_tpl->tpl_vars['cateogry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cateogry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['home']->value['post']['post_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
		</span> 
		<div class="tags_container">
			<span class="tags">
				<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['home']->value['post']['post_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
		<div class="excerpt"><?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_excerpt'];?>

			<span class="date"> <i class="icon-clock"></i><?php echo $_smarty_tpl->tpl_vars['home']->value['post']['post_publish_date'];?>
</span>
		</div>
	</article>
</article><?php }} ?>
