<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 16:47:21
         compiled from "/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20379347645391f0993b2e53-94374619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7982541240cc38a05125187d574b0b6b59ccf881' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/author.tpl',
      1 => 1401983980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20379347645391f0993b2e53-94374619',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5391f0993b9746_65123428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5391f0993b9746_65123428')) {function content_5391f0993b9746_65123428($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

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
