<?php
/* Smarty version 3.1.43, created on 2022-05-20 09:09:20
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\modules\ps_checkout\views\templates\hook\displayProductPriceBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62873ea02908d3_09262141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27b37ddedda3c633b45fd77f535388fa6455cfe0' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\modules\\ps_checkout\\views\\templates\\hook\\displayProductPriceBlock.tpl',
      1 => 1652772147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62873ea02908d3_09262141 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['totalCartPrice']->value)) && $_smarty_tpl->tpl_vars['payIn4XisProductPageEnabled']->value == true) {?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || $_smarty_tpl->tpl_vars['content_only']->value === 0) {?>
    <div id="ps-checkout-pp-message-container"
      data-pp-placement="product"
      data-pp-style-layout="text"
      data-pp-style-logo-type="inline"
      data-pp-style-text-color="black"
      data-pp-amount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totalCartPrice']->value, ENT_QUOTES, 'UTF-8');?>
"
    ></div>
    <?php echo '<script'; ?>
>
      window.onload = function () {
        if (
          window.ps_checkoutPayPalSdkInstance
          && window.ps_checkoutPayPalSdkInstance.Messages
          && window.ps_checkoutPayPalSdkInstance.Marks({ fundingSource: 'paylater' }).isEligible()
        ) {
          document.getElementById('ps-checkout-pp-message-container').setAttribute('data-pp-message', true);
        }
      }
    <?php echo '</script'; ?>
>
  <?php }
}
}
}
