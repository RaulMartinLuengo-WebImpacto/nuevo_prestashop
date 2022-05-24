<?php
/* Smarty version 3.1.43, created on 2022-05-23 13:20:44
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628b6e0c13aac2_28398109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac56ea137fb8af1fd1b9423f0f8cda1e2b6ff76c' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\stock.tpl',
      1 => 1653298542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b6e0c13aac2_28398109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1782346193628b6e0c1389b8_52160628', 'stock');
}
/* {block 'stock'} */
class Block_1782346193628b6e0c1389b8_52160628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stock' => 
  array (
    0 => 'Block_1782346193628b6e0c1389b8_52160628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
<div class="div_stock">
    Disponibilidad:
    <p class="p_stock">¡En stock!</p>
</div>
<?php }?> <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity'] < 0)) {?> <div class="div_stock">
    Disponibilidad:
    <p class="p_stockout">NO HAY STOCK DISPONIBLE</p>
    </div>
    <?php }?> <?php
}
}
/* {/block 'stock'} */
}
