<?php
/* Smarty version 3.1.43, created on 2022-05-23 16:22:10
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\price-without-tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628b9892f20869_20837118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54481834a94a636826a3f7b09466cc51cb54f4a' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\price-without-tax.tpl',
      1 => 1653315655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b9892f20869_20837118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128033029628b9892f14a98_87281598', 'sin_iva');
}
/* {block 'sin_iva'} */
class Block_128033029628b9892f14a98_87281598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sin_iva' => 
  array (
    0 => 'Block_128033029628b9892f14a98_87281598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['product']->value['price']);?> <?php $_smarty_tpl->_assignInScope('tax', $_smarty_tpl->tpl_vars['product']->value['id_tax_rules_group']);?> <?php if (($_smarty_tpl->tpl_vars['tax']->value == 1)) {?> <?php $_smarty_tpl->_assignInScope('iva', ($_smarty_tpl->tpl_vars['price']->value*21)/100);?> <?php $_smarty_tpl->_assignInScope('precio_sin_iva', $_smarty_tpl->tpl_vars['price']->value-$_smarty_tpl->tpl_vars['iva']->value);?>
<div class="price-without-tax">
    <p class="word">SIN IVA</p>
    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['precio_sin_iva']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('final', number_format($_prefixVariable1,2,",","."));?>
    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['final']->value, ENT_QUOTES, 'UTF-8');?>
€</p>
</div>
<?php }?> <?php
}
}
/* {/block 'sin_iva'} */
}
