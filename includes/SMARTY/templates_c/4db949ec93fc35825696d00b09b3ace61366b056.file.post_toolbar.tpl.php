<?php /* Smarty version Smarty-3.1.15, created on 2014-07-05 15:59:15
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/post_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43646204653b820d39226e0-80006302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4db949ec93fc35825696d00b09b3ace61366b056' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/post_toolbar.tpl',
      1 => 1397482890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43646204653b820d39226e0-80006302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b820d393bd87_70139664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b820d393bd87_70139664')) {function content_53b820d393bd87_70139664($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<div class="postToolbar">
	<?php echo $_smarty_tpl->getSubTemplate ('post_share_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
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
</div><?php }} ?>
