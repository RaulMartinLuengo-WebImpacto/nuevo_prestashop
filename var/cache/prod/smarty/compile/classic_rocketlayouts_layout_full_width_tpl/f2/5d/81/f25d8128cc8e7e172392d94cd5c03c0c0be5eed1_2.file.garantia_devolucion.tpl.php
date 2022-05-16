<?php
/* Smarty version 3.1.43, created on 2022-05-12 16:04:02
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\garantia_devolucion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627d13d223b0e8_30682225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25d8128cc8e7e172392d94cd5c03c0c0be5eed1' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\garantia_devolucion.tpl',
      1 => 1652364228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627d13d223b0e8_30682225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1954873775627d13d2235bd5_56503716', 'stock');
}
/* {block 'stock'} */
class Block_1954873775627d13d2235bd5_56503716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stock' => 
  array (
    0 => 'Block_1954873775627d13d2235bd5_56503716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="iconos_partebaja--product">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
certificado-de-garantia.png">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
devolucion-de-producto.png">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
certificado-de-garantia.png">
</div>
<?php
}
}
/* {/block 'stock'} */
}
