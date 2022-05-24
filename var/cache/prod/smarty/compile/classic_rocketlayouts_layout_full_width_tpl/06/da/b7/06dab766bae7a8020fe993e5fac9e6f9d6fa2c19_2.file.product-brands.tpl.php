<?php
/* Smarty version 3.1.43, created on 2022-05-23 13:20:44
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\product-brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628b6e0c0b2c16_61048177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06dab766bae7a8020fe993e5fac9e6f9d6fa2c19' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\product-brands.tpl',
      1 => 1653302240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b6e0c0b2c16_61048177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-brands">
    <ul>
        <li>
            Marca: <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?><span class="product_manufacturer_name"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');
}?></span
      >
    </li>
  </ul>
</div>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1792767523628b6e0c0b0dc6_30367718', 'brand');
?>
 --><?php }
/* {block 'brand'} */
class Block_1792767523628b6e0c0b0dc6_30367718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand' => 
  array (
    0 => 'Block_1792767523628b6e0c0b0dc6_30367718',
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
