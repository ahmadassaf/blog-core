<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 16:47:21
         compiled from "/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1968831115391f099270078-77713094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21ea0cd682acddd647bbba101cc81372d77587d7' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_toolbar.tpl',
      1 => 1397482890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1968831115391f099270078-77713094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5391f099284457_69928800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5391f099284457_69928800')) {function content_5391f099284457_69928800($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

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
