<?php /* Smarty version Smarty-3.1.15, created on 2014-07-05 15:59:15
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93412547853b820d3870912-83871525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94d908b6d8ca5fa8ebd7a7bbfe90a4713eee15f1' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/index.tpl',
      1 => 1401983076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93412547853b820d3870912-83871525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b820d38d8231_89261361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b820d38d8231_89261361')) {function content_53b820d38d8231_89261361($_smarty_tpl) {?><div id="content" class="postContent"> 
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
