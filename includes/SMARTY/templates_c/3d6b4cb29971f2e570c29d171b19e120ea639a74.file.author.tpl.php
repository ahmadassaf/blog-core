<?php /* Smarty version Smarty-3.1.15, created on 2014-03-09 22:31:30
         compiled from "/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1320121213531cebc27b1802-16705634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d6b4cb29971f2e570c29d171b19e120ea639a74' => 
    array (
      0 => '/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/author.tpl',
      1 => 1393255068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1320121213531cebc27b1802-16705634',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_531cebc27b90d7_22113665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531cebc27b90d7_22113665')) {function content_531cebc27b90d7_22113665($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("main.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<div class="author_information">
	<img data-src="<?php echo $_smarty_tpl->getConfigVariable('personal_image');?>
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
<?php }} ?>
