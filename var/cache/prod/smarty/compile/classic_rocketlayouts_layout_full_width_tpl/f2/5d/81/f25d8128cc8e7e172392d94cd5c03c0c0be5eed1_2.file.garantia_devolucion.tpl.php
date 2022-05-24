<?php
/* Smarty version 3.1.43, created on 2022-05-23 13:20:44
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\garantia_devolucion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628b6e0c6732f4_83117336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25d8128cc8e7e172392d94cd5c03c0c0be5eed1' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\garantia_devolucion.tpl',
      1 => 1653057059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b6e0c6732f4_83117336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2034877286628b6e0c671686_38883832', 'stock');
}
/* {block 'stock'} */
class Block_2034877286628b6e0c671686_38883832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stock' => 
  array (
    0 => 'Block_2034877286628b6e0c671686_38883832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-iconos">
    <div class="iconos_partebaja--product">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
certificado-de-garantia.png" />
        <p>
            <span class="iconos-garantia">2 años</span><br /> de garantia
        </p>
    </div>
    <div class="iconos_partebaja--product">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
devolucion-de-producto.png" />
        <p>
            <span class="iconos-garantia">30 días</span><br /> de deovolución
        </p>
    </div>
    <div class="iconos_partebaja--product">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
certificado-de-garantia.png" />
        <p>
            <span class="iconos-garantia">100%</span><br/> pago asegurado
        </p>
    </div>
</div>
<?php
}
}
/* {/block 'stock'} */
}
