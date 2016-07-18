<?php /* Smarty version Smarty-3.1.15, created on 2014-03-14 12:38:55
         compiled from "/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/admin_cache_cleaner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5444468065322f85f00ee51-73602792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166fb4d37f55816d75d29b6f25e5cc558ee8152d' => 
    array (
      0 => '/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/admin_cache_cleaner.tpl',
      1 => 1391008144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5444468065322f85f00ee51-73602792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cache_cleaner' => 0,
    'type' => 0,
    'section' => 0,
    'cached' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5322f85f08c5f9_51105296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322f85f08c5f9_51105296')) {function content_5322f85f08c5f9_51105296($_smarty_tpl) {?><article class="wrap">
	<h1>Smarty and Trasnients Cache Cleaner</h1>
	<button class="button" onclick="document.clearAllCache('clear_all_caches')">Call All Smarty Caches</button>
	<button class="button" onclick="document.clearAllCache('clear_all_transients')">Call All Transients</button>
</article>

<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache_cleaner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
	<h2 style="text-transform:capitalize"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 Transients</h2>
	<article class="cache_list" style="display: table;width: 90%;">	
		<?php  $_smarty_tpl->tpl_vars['cached'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cached']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cached']->key => $_smarty_tpl->tpl_vars['cached']->value) {
$_smarty_tpl->tpl_vars['cached']->_loop = true;
?>
			<span style=" display: table;margin: 5px;"><strong><?php echo $_smarty_tpl->tpl_vars['cached']->value['type'];?>
</strong> ID: <?php echo $_smarty_tpl->tpl_vars['cached']->value['ID'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['cached']->value['name'];?>
</strong> <?php if ($_smarty_tpl->tpl_vars['cached']->value['page']) {?><strong> - Page: <?php echo $_smarty_tpl->tpl_vars['cached']->value['page'];?>
</strong><?php }?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['cached']->value['link'];?>
" style="text-decoration:none;margin:0 0 0 10px">link</a>
				<a style="cursor:pointer" onclick="document.clearAllCache('clear_cache','<?php echo $_smarty_tpl->tpl_vars['cached']->value['type'];?>
','<?php echo $_smarty_tpl->tpl_vars['cached']->value['ID'];?>
','<?php echo $_smarty_tpl->tpl_vars['cached']->value['page'];?>
','<?php echo $_smarty_tpl->tpl_vars['cached']->value['name'];?>
')"> - Delete Cache</a>
				<a style="cursor:pointer" onclick="document.clearAllCache('clear_transient','<?php echo $_smarty_tpl->tpl_vars['cached']->value['type'];?>
','<?php echo $_smarty_tpl->tpl_vars['cached']->value['ID'];?>
','<?php echo $_smarty_tpl->tpl_vars['cached']->value['page'];?>
','<?php echo $_smarty_tpl->tpl_vars['cached']->value['name'];?>
')"> - Delete Transient</a>
			</span>
		<?php } ?>
	</article>
<?php } ?>
<?php }} ?>
