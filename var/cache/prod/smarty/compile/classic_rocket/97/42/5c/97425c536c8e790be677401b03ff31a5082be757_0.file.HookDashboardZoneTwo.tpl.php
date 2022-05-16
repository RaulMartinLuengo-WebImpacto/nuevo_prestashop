<?php
/* Smarty version 3.1.43, created on 2022-05-12 15:46:31
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\modules\ps_metrics\views\templates\hook\HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627d0fb787e925_82703923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97425c536c8e790be677401b03ff31a5082be757' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\modules\\ps_metrics\\views\\templates\\hook\\HookDashboardZoneTwo.tpl',
      1 => 1651826363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627d0fb787e925_82703923 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="metricsApp"></div>
<link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsAssets']->value ));?>
" type="text/css" media="all">

<?php if ($_smarty_tpl->tpl_vars['pathMetricsAppSourceMap']->value) {?>
  <?php echo '<script'; ?>
 type="application/json" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsAppSourceMap']->value ));?>
" async defer><?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
