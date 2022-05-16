<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:19:51
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\modules\welcome\views\templates\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62821737aa88e0_40079448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f9681ecf86c60d11f7c6928d104e0c327fa7cef' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1651826365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62821737aa88e0_40079448 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
