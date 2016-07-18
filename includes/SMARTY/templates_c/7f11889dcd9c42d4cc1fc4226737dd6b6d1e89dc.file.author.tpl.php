<?php /* Smarty version Smarty-3.1.15, created on 2014-07-05 15:59:15
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137566678753b820d3aaf9e5-90624647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f11889dcd9c42d4cc1fc4226737dd6b6d1e89dc' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/author.tpl',
      1 => 1401983980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137566678753b820d3aaf9e5-90624647',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b820d3ab6fc3_40198662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b820d3ab6fc3_40198662')) {function content_53b820d3ab6fc3_40198662($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<div class="author_information">
	<img alt="Ahmad Assaf" src="<?php echo $_smarty_tpl->getConfigVariable('personal_image');?>
" onError="$(this).parents('.image').length !== 0 ? $(this).parents('.image').css('display','none') : $(this).css('display','none');"/>
	<div class="author_description">
	    <a href="http://ahmadassaf.com" rel="author"><h2>Ahmad Assaf</h2></a>
		<span>Knowledge Seeker and Passionate Learner</span>
		<p>I am currently a PhD Student at the University of <a href="http://www.telecom-paristech.fr/nc/formation-et-innovation-dans-le-numerique.html">Telecom ParisTech (EURECOM)</a>, my main research areas are the Semantic Web and Information Retreival. I am also an Associate Researcher at <a href="http://www.sap.com/france/index.html">SAP Labs, France</a>. My skills mainly fall in Web Development and Front-end technologies. I have a sweet spot for data mining and analysis. 
		<div class="shares">
			<a href="http://www.facebook.com/simplytech/" target="_blank"><i class="icon-facebook"></i>Facebook</a>
			<a href="http://twitter.com/ahmadaassaf" target="_blank"><i class="icon-twitter"></i>Twitter</a>
			<a href="https://plus.google.com/112890166770582228940/posts" target="_blank"><i class="icon-google"></i>Google+</a>
			<a href="http://www.linkedin.com/in/ahmadassaf" target="_blank"><i class="icon-linkedin"></i>LinkedIn</a>
			<a href="https://github.com/ahmadassaf" target="_blank"><i class="icon-github"></i>Github</a>
		</div>
	</div>
</div>
<?php }} ?>
