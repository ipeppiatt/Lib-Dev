<?php /* Smarty version Smarty-3.1.16, created on 2015-05-11 09:24:37
         compiled from "/home/seagull/public_html/lablibdev/tpl/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194069365550ad95c2dea2-66535872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e88b3daf1c5f7b452126143b70387472e99971b6' => 
    array (
      0 => '/home/seagull/public_html/lablibdev/tpl/dashboard.tpl',
      1 => 1426887478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194069365550ad95c2dea2-66535872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'dashboardItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5550ad95cc9015_89157630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550ad95cc9015_89157630')) {function content_5550ad95cc9015_89157630($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/dashboard.css,css/jquery.qtip.min.css'), 0);?>


<ul id="dashboardList">
<?php  $_smarty_tpl->tpl_vars['dashboardItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dashboardItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dashboardItem']->key => $_smarty_tpl->tpl_vars['dashboardItem']->value) {
$_smarty_tpl->tpl_vars['dashboardItem']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['dashboardItem']->value->PageLoad();?>
</li>
<?php } ?>
</ul>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.qtip.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"dashboard.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>


<script type="text/javascript">
$(document).ready(function() {

	var dashboardOpts = {
		reservationUrl: "<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=",
		summaryPopupUrl: "ajax/respopup.php"
	};

	var dashboard = new Dashboard(dashboardOpts);
	dashboard.init();
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
