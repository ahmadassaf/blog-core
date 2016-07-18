<?php /* Smarty version Smarty-3.1.15, created on 2014-03-17 12:38:14
         compiled from "/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_share_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18641452005326ecb60ce4e4-93274641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e3bc4fd55f838a5852448f18e9d04c9e2ccf597' => 
    array (
      0 => '/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/templates/post_share_button.tpl',
      1 => 1394210478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18641452005326ecb60ce4e4-93274641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'shareItem' => 0,
    'service' => 0,
    'checker' => 0,
    'secondary_shareItem' => 0,
    'secondary_service' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5326ecb6122dd5_10561597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326ecb6122dd5_10561597')) {function content_5326ecb6122dd5_10561597($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Users/ASSAF/Dropbox/Projects/Web-Projects/My_Personal_Space/blog_source/includes/SMARTY/plugins/function.cycle.php';
?><div class="article-share">
	<div class="share-button">
		<i class="icon-share"></i>Share
		<span class="animate-spin total_share_counter">&#59413</span>
	</div>         
	<div class="share-popup tooltip" style="display: none">
		<div class="share-loading">
			<i class="icon-signal"></i>Loading Share Count
			<img src="<?php echo $_smarty_tpl->getConfigVariable('share_loader');?>
"/>
		</div>
		<script class="share_counter" type="text/x-jQuery-tmpl">
	  		<table>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['shareItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shareItem']->_loop = false;
 $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['index']->value['shareButton']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['share_array']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['shareItem']->key => $_smarty_tpl->tpl_vars['shareItem']->value) {
$_smarty_tpl->tpl_vars['shareItem']->_loop = true;
 $_smarty_tpl->tpl_vars['service']->value = $_smarty_tpl->tpl_vars['shareItem']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['share_array']['index']++;
?>
					<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>"1,2"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['checker'] = new Smarty_variable($_tmp1, null, 0);?>
						<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['share_array']['index'])) {?><tr><?php }?>
						    <td>
						    	<div>
						    		<a href="<?php echo $_smarty_tpl->tpl_vars['shareItem']->value['link'];?>
" target="_blank" class="popup-link icon">
							    		<i class="icon-<?php echo $_smarty_tpl->tpl_vars['service']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['shareItem']->value['name'];?>

							    		<div class="digit <?php echo $_smarty_tpl->tpl_vars['service']->value;?>
">{{if <?php echo $_smarty_tpl->tpl_vars['service']->value;?>
  }} ${<?php echo $_smarty_tpl->tpl_vars['service']->value;?>
} {{else}}0{{/if}}</div>
						    		</a>
					    		</div>
				    		</td>
						<?php if (!(1 & $_smarty_tpl->tpl_vars['checker']->value)) {?></tr><?php }?>
					<?php } ?>
		        </tbody>
			    </table>
				<table class="extra-shares">
					<tbody>
					<tr>
							<td>
								<i class="icon-link"></i>
								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['index']->value['post']['post_permalink'];?>
" id="cp-link" onclick="this.select();" />
							</td>
							<td>
								<?php  $_smarty_tpl->tpl_vars['secondary_shareItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['secondary_shareItem']->_loop = false;
 $_smarty_tpl->tpl_vars['secondary_service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['index']->value['secondary_sharing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['secondary_shareItem']->key => $_smarty_tpl->tpl_vars['secondary_shareItem']->value) {
$_smarty_tpl->tpl_vars['secondary_shareItem']->_loop = true;
 $_smarty_tpl->tpl_vars['secondary_service']->value = $_smarty_tpl->tpl_vars['secondary_shareItem']->key;
?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['secondary_shareItem']->value['link'];?>
" target="_blank" class="popup-link icon">
									<i class="icon-<?php echo $_smarty_tpl->tpl_vars['secondary_service']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['secondary_shareItem']->value['name'];?>

								</a>
								<?php } ?>
							</td>
						</tr>
					</tbody>
				</table>
	  	</script>
	</div>  
</div>  <?php }} ?>
