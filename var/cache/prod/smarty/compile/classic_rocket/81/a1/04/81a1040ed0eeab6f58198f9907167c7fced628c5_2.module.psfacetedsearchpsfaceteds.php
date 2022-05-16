<?php
/* Smarty version 3.1.43, created on 2022-05-12 15:52:18
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627d1112a4aa72_98743730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1651826369,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627d1112a4aa72_98743730 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']))) {?>
<div id="_desktop_search_filters_wrapper" class="visible--desktop">
  <div id="search_filter_controls" class="visible--mobile">
      <span id="_mobile_search_filters_clear_all"></span>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }
}
}
