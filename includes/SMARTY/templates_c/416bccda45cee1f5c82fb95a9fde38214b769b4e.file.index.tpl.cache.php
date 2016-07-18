<?php /* Smarty version Smarty-3.1.15, created on 2014-03-17 12:38:13
         compiled from "/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4635589415326ecb5f24fc5-92255457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '416bccda45cee1f5c82fb95a9fde38214b769b4e' => 
    array (
      0 => '/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/index.tpl',
      1 => 1394210974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4635589415326ecb5f24fc5-92255457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5326ecb6068228_84123389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326ecb6068228_84123389')) {function content_5326ecb6068228_84123389($_smarty_tpl) {?><div id="content" class="postContent"> 
  <div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">

    <!-- Article Schema.org Metadata -->
    <meta itemprop="thumbnailUrl" content="<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_thumbnail_meta'];?>
" />
    <meta itemprop="description" content="<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_excerpt'];?>
" />
    <!-- End Article Metadata -->

    <?php echo $_smarty_tpl->getSubTemplate ('post_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    <div class="material">
      <a class="printandpdf" href="#">
        <i class="icon-print">Print</i>
        <i class="icon-doc-inv-alt">PDF</i>
      </a>
      <div itemprop="articleBody text">
       <?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_content'];?>

      </div>
      <div class="post_tags">
        <span class="tags">
          <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['post']['post_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
          <a rel='tag' itemprop='keywords' href='<?php echo $_smarty_tpl->tpl_vars['tag']->value['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
          <?php } ?>  
        </span>
      </div> 
    </div> 
    <?php echo $_smarty_tpl->getSubTemplate ('author.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
   
  </div>
</div>
<article class="posts_preview zoom">

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
