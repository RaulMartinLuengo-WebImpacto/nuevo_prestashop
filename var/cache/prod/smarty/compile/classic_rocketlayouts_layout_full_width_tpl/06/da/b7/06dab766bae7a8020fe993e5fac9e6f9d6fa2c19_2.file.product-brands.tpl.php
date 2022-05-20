<?php
/* Smarty version 3.1.43, created on 2022-05-20 11:42:55
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\product-brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6287629f778a81_96015076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06dab766bae7a8020fe993e5fac9e6f9d6fa2c19' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\product-brands.tpl',
      1 => 1653039763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6287629f778a81_96015076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-brands">
    <ul>
        <li>
            Marca: <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?>
            <span class="product_manufacturer_name"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');
}?></span
      >
      <li></li>
    </li>
  </ul>
</div>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5774484486287629f776615_69510043', 'brand');
?>
 --><?php }
/* {block 'brand'} */
class Block_5774484486287629f776615_69510043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand' => 
  array (
    0 => 'Block_5774484486287629f776615_69510043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p class="brand_name">
    Marca: <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?>
    <span class="product_manufacturer_name"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</span
  >
  <?php }?>
</p>
<?php
}
}
/* {/block 'brand'} */
}
