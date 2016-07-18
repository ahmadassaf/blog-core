<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 16:47:21
         compiled from "/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13184641695391f0992366a7-28816688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d0709798cf9c78d92bb4c22aca82f0e29c2a0e' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_header.tpl',
      1 => 1399408200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13184641695391f0992366a7-28816688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'cateogry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5391f09926c139_63394856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5391f09926c139_63394856')) {function content_5391f09926c139_63394856($_smarty_tpl) {?><div class="post_header">   
  <h1 class="postTitle" itemprop="name headline"><?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_title'];?>
</h1>
  <div class="post_metaInformation" data-word-count="<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_wordCount'];?>
">   
	<span class="post_categories" itemprop="articleSection">
		<?php  $_smarty_tpl->tpl_vars['cateogry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cateogry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['post']['post_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cateogry']->key => $_smarty_tpl->tpl_vars['cateogry']->value) {
$_smarty_tpl->tpl_vars['cateogry']->_loop = true;
?>
		<a rel='category tag' itemprop='articleSection' href='<?php echo $_smarty_tpl->tpl_vars['cateogry']->value['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['cateogry']->value['name'];?>
</a>
		<?php } ?>
	</span>  
    <span class="published_date" itemprop="datePublished"><i class="icon-clock"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_published_date'];?>
</span>        
	<a class="comments_count" href="#comments">
	<i class="icon-chat"></i>
      <?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_comments'];?>

    </a>  
		<?php if ($_smarty_tpl->tpl_vars['index']->value['series']) {?>
		<div class="post_series">
		<div class="series_title">This post is part of the series 
			<span class="series_name"><?php echo $_smarty_tpl->tpl_vars['index']->value['series']['series_title'];?>
</span>
		</div>
		<div class="series_list">
		<?php echo $_smarty_tpl->tpl_vars['index']->value['series']['series_members'];?>

		</div>
		</div>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ('post_toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div> 
</div><?php }} ?>
