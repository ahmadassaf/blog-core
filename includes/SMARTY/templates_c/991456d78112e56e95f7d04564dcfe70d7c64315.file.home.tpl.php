<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 16:38:52
         compiled from "/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20247890495391ee9cbfa8a3-68514349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '991456d78112e56e95f7d04564dcfe70d7c64315' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/home.tpl',
      1 => 1401902414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20247890495391ee9cbfa8a3-68514349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home' => 0,
    'category_name' => 0,
    'cateogry_list' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5391ee9cc16000_35148858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5391ee9cc16000_35148858')) {function content_5391ee9cc16000_35148858($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<div class="home_posts_sidebar">
	<?php  $_smarty_tpl->tpl_vars['cateogry_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cateogry_list']->_loop = false;
 $_smarty_tpl->tpl_vars['category_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['home']->value['cateogries_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cateogry_list']->key => $_smarty_tpl->tpl_vars['cateogry_list']->value) {
$_smarty_tpl->tpl_vars['cateogry_list']->_loop = true;
 $_smarty_tpl->tpl_vars['category_name']->value = $_smarty_tpl->tpl_vars['cateogry_list']->key;
?>
		<ul>
			<li class="title"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</li>
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cateogry_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
					<li class="article_listing">
						<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</a>
					</li>
				<?php } ?>
		</ul>
    <?php } ?>
</div><?php }} ?>
