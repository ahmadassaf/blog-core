<?php /* Smarty version Smarty-3.1.15, created on 2014-07-05 15:59:15
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/post_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191558107253b820d38dc561-79470934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c15afd225c811924ab7815d1463fde8cb3f70036' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/post_header.tpl',
      1 => 1399408200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191558107253b820d38dc561-79470934',
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
  'unifunc' => 'content_53b820d391e5f1_75660556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b820d391e5f1_75660556')) {function content_53b820d391e5f1_75660556($_smarty_tpl) {?><div class="post_header">   
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
