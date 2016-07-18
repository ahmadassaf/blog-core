<?php /* Smarty version Smarty-3.1.15, created on 2014-03-09 22:31:30
         compiled from "/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1223134280531cebc26eb688-00720021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21cd210c763462c639b22c059ff4f4194dc856c7' => 
    array (
      0 => '/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_header.tpl',
      1 => 1386014443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1223134280531cebc26eb688-00720021',
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
  'unifunc' => 'content_531cebc270e576_41559553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531cebc270e576_41559553')) {function content_531cebc270e576_41559553($_smarty_tpl) {?><div class="post_header"> 
  <h1 class="postTitle" itemprop="name headline"><?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_title'];?>
</h1>
  <div class="post_metaInformation" data-word-count="<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_wordCount'];?>
">                  
    <span class="published_date" itemprop="datePublished"><?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_published_date'];?>
</span>        
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
    <a class="comments_count" href="#comments">
      <?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_comments'];?>

    </a>   
	<?php echo $_smarty_tpl->getSubTemplate ('post_toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div> 
</div><?php }} ?>
