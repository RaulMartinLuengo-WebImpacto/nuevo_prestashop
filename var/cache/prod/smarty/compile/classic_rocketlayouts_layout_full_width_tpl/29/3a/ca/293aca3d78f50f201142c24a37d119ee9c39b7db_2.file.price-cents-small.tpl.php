<?php
/* Smarty version 3.1.43, created on 2022-05-23 16:25:20
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\price-cents-small.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628b99506c5667_56389225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '293aca3d78f50f201142c24a37d119ee9c39b7db' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\price-cents-small.tpl',
      1 => 1653315903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b99506c5667_56389225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1736985394628b99506a95d3_85769303', 'price');
}
/* {block 'price'} */
class Block_1736985394628b99506a95d3_85769303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'price' => 
  array (
    0 => 'Block_1736985394628b99506a95d3_85769303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_assignInScope('priceValue', explode(",",$_smarty_tpl->tpl_vars['product']->value['price']));?>
<div class="price_product">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['priceValue']->value[0], ENT_QUOTES, 'UTF-8');?>
,<span class="small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['priceValue']->value[1], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php
}
}
/* {/block 'price'} */
}
