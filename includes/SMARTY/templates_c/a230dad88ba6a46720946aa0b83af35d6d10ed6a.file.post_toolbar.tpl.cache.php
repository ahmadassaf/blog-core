<?php /* Smarty version Smarty-3.1.15, created on 2014-03-17 12:38:14
         compiled from "/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243900445326ecb6094a88-65750849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a230dad88ba6a46720946aa0b83af35d6d10ed6a' => 
    array (
      0 => '/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_toolbar.tpl',
      1 => 1386025629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243900445326ecb6094a88-65750849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5326ecb60bbd05_80565156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326ecb60bbd05_80565156')) {function content_5326ecb60bbd05_80565156($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<div class="postToolbar">
	<?php echo $_smarty_tpl->getSubTemplate ('post_share_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
	<a class="nav-buttons toggle_socialbar" href="#social_bar">
		<i class="icon-signal"></i>Social Bar
	</a>
	<?php if (!$_smarty_tpl->tpl_vars['index']->value['post']['next_post_link']=='') {?>
      <div class="nav-buttons clearfix">
		  <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['next_post_link'];?>
" rel="next">Next Post
			<span class="icon-right-open"></span>
		  </a>
	  </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['index']->value['series']) {?>
      <div class="post_series">
		<div class="series_title">This post is part of the series: 
			<span class="series_name"><?php echo $_smarty_tpl->tpl_vars['index']->value['series']['series_title'];?>
</span>
		</div>
      <div class="series_list">
		<?php echo $_smarty_tpl->tpl_vars['index']->value['series']['series_members'];?>

	  </div>
      </div>
    <?php }?>
</div><?php }} ?>
