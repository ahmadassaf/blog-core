<?php /* Smarty version Smarty-3.1.15, created on 2014-07-17 16:37:26
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/posts_previews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1383523494539771b69f1c09-86260753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64c39c607e00d163c9b0b65c9e0b329f9d20434d' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/posts_previews.tpl',
      1 => 1405614907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1383523494539771b69f1c09-86260753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539771b6a48167_03120454',
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539771b6a48167_03120454')) {function content_539771b6a48167_03120454($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="posts_list">
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value['posts_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

		<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="post_preview list" >

			<!-- Article Schema.org Metadata -->
			<meta itemprop="thumbnailUrl" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_thumbnail_meta'];?>
" />
			<meta itemprop="sameAs url" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
"/>
			<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_excerpt'], ENT_QUOTES, 'UTF-8', true);?>
"/>
			<!-- End Article Metadata -->

			<a class="image" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
" >
				<img src="<?php echo $_smarty_tpl->getConfigVariable('preloader');?>
" onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');" data-src="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
"/>
			</a>
			<article class="post">
				<h3 itemprop="name headline" class="title">
					<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_permalink'];?>
" rel="bookmark"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</a>
				</h3>
				<div class="tags_container">
					<span class="tags">
						<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['post_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tags_array']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
						<a rel='tag' itemprop='keywords' href='<?php echo $_smarty_tpl->tpl_vars['tag']->value['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
						<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tags_array']['last']) {?>-<?php }?>
						<?php } ?>
					</span>
				</div>
			</article>

		</article>
	<?php } ?>
</div>

<?php }} ?>
