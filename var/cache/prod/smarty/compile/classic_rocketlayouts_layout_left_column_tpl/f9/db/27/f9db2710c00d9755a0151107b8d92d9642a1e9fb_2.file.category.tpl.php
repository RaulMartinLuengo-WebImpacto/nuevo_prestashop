<?php
/* Smarty version 3.1.43, created on 2022-05-20 09:36:00
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628744e0300a39_53896726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9db2710c00d9755a0151107b8d92d9642a1e9fb' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\listing\\category.tpl',
      1 => 1652772155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_628744e0300a39_53896726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_431133647628744e02fb562_71273431', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_431133647628744e02fb562_71273431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_431133647628744e02fb562_71273431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
}
