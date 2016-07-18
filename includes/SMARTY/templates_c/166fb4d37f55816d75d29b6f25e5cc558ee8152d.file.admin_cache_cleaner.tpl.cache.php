<?php /* Smarty version Smarty-3.1.15, created on 2014-02-24 17:37:08
         compiled from "/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/admin_cache_cleaner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1927211418530b8344decf47-38718770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1927211418530b8344decf47-38718770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cache_cleaner' => 1,
    'type' => 1,
    'section' => 1,
    'cached' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_530b8344e71281_28638422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b8344e71281_28638422')) {function content_530b8344e71281_28638422($_smarty_tpl) {?><article class="wrap">
	<h1>Smarty and Trasnients Cache Cleaner</h1>
	<button class="button" onclick="document.clearAllCache('clear_all_caches')">Call All Smarty Caches</button>
	<button class="button" onclick="document.clearAllCache('clear_all_transients')">Call All Transients</button>
</article>

<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php  $_smarty_tpl->tpl_vars[\'section\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'section\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'type\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'cache_cleaner\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'section\']->key => $_smarty_tpl->tpl_vars[\'section\']->value) {
$_smarty_tpl->tpl_vars[\'section\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'type\']->value = $_smarty_tpl->tpl_vars[\'section\']->key;
?>/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>

	<h2 style="text-transform:capitalize"><?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'type\']->value;?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
 Transients</h2>
	<article class="cache_list" style="display: table;width: 90%;">	
		<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php  $_smarty_tpl->tpl_vars[\'cached\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cached\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'section\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cached\']->key => $_smarty_tpl->tpl_vars[\'cached\']->value) {
$_smarty_tpl->tpl_vars[\'cached\']->_loop = true;
?>/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>

			<span style=" display: table;margin: 5px;"><strong><?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'type\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
</strong> ID: <?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'ID\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
 <strong><?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'name\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
</strong> <?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php if ($_smarty_tpl->tpl_vars[\'cached\']->value[\'page\']) {?>/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
<strong> - Page: <?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'page\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
</strong><?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php }?>/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>

				<a href="<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'link\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
" style="text-decoration:none;margin:0 0 0 10px">link</a>
				<a style="cursor:pointer" onclick="document.clearAllCache('clear_cache','<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'type\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
','<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'ID\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
','<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'page\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
','<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'name\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
')"> - Delete Cache</a>
				<a style="cursor:pointer" onclick="document.clearAllCache('clear_transient','<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'type\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
','<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'ID\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
','<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'page\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
','<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php echo $_smarty_tpl->tpl_vars[\'cached\']->value[\'name\'];?>
/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>
')"> - Delete Transient</a>
			</span>
		<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php } ?>/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>

	</article>
<?php echo '/*%%SmartyNocache:1927211418530b8344decf47-38718770%%*/<?php } ?>/*/%%SmartyNocache:1927211418530b8344decf47-38718770%%*/';?>

<?php }} ?>
