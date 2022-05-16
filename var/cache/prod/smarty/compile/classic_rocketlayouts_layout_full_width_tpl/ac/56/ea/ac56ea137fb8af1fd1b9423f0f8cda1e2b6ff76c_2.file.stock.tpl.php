<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:20:45
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6282176d2a7f89_48920317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac56ea137fb8af1fd1b9423f0f8cda1e2b6ff76c' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\stock.tpl',
      1 => 1652363521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282176d2a7f89_48920317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21254234576282176d2a56a9_83332630', 'stock');
}
/* {block 'stock'} */
class Block_21254234576282176d2a56a9_83332630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stock' => 
  array (
    0 => 'Block_21254234576282176d2a56a9_83332630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
    <div class="div_stock">
        Disponibilidad: <p class="p_stock">EN STOCK!</p>
    </div>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['product']->value['quantity'] < 0)) {?>
    <div class="div_stock">
        Disponibilidad: <p class="p_stockout">NO HAY STOCK DISPONIBLE</p>
    </div>
<?php }
}
}
/* {/block 'stock'} */
}
