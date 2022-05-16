<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:16:54
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62821686e18fd3_42274247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e807335546cfa2360c36327ac89dd2fcb054379' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1651826369,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62821686e18fd3_42274247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin C:\WebImpacto\Xampp\htdocs\prestashop/themes/classic-rocket/modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl --><section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119635371562821686e01f95_53837988', 'active_filters_title');
?>


  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <div class="active_filters__list">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13106453662821686e125e7_86788617', 'active_filters_item');
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }?>
</section>
<!-- end C:\WebImpacto\Xampp\htdocs\prestashop/themes/classic-rocket/modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl --><?php }
/* {block 'active_filters_title'} */
class Block_119635371562821686e01f95_53837988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_119635371562821686e01f95_53837988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p class="h6 <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active-filter__title<?php } else { ?>d--none<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
  <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_13106453662821686e125e7_86788617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_13106453662821686e125e7_86788617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="js-search-link active_filters__list-item btn btn-sm btn-light" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE5CD;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
</strong></a>
        <?php
}
}
/* {/block 'active_filters_item'} */
}
