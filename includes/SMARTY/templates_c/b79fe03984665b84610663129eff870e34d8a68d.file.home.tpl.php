<?php /* Smarty version Smarty-3.1.15, created on 2014-06-10 20:59:34
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:845858027539771b6831951-18752088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b79fe03984665b84610663129eff870e34d8a68d' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/home.tpl',
      1 => 1401902414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845858027539771b6831951-18752088',
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
  'unifunc' => 'content_539771b6850519_98086751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539771b6850519_98086751')) {function content_539771b6850519_98086751($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

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
