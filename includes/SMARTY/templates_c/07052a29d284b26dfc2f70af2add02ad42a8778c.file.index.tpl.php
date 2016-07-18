<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 16:47:21
         compiled from "/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4499882455391f0991c8dc9-47956926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07052a29d284b26dfc2f70af2add02ad42a8778c' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/index.tpl',
      1 => 1401983076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4499882455391f0991c8dc9-47956926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5391f0992325b8_78214870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5391f0992325b8_78214870')) {function content_5391f0992325b8_78214870($_smarty_tpl) {?><div id="content" class="postContent"> 
  <div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">

    <!-- Article Schema.org Metadata -->
    <meta itemprop="thumbnailUrl" content="<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_thumbnail_meta'];?>
" />
    <meta itemprop="description" content="<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_excerpt'];?>
" />
    <!-- End Article Metadata -->

    <?php echo $_smarty_tpl->getSubTemplate ('post_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="material">
      <a class="printandpdf" href="#">
        <i class="icon-print">Print</i>
        <i class="icon-doc-inv-alt">PDF</i>
      </a>
      <div itemprop="articleBody text">
       <?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_content'];?>

    </div>

  <script type="text/javascript"> 
    
    var isPost          = true;
    var post_ID         = <?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_ID'];?>
;
    var post_title      = "<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_title'];?>
";
    var post_link       = "<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_permalink'];?>
";
    var post_tags       = <?php echo json_encode($_smarty_tpl->tpl_vars['index']->value['post']['post_keywords']);?>
;
    var post_excerpt    = "<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_excerpt'];?>
";
	
  </script><?php }} ?>
