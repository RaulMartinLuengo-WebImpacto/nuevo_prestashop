<?php
/* Smarty version 3.1.43, created on 2022-05-18 12:22:02
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6284c8ca4b5e26_32061152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1652772155,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6284c8ca4b5e26_32061152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin C:\WebImpacto\Xampp\htdocs\prestashop/themes/classic-rocket/modules/ps_socialfollow/ps_socialfollow.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17549389786284c8ca4b1258_67843890', 'block_social');
?>

<!-- end C:\WebImpacto\Xampp\htdocs\prestashop/themes/classic-rocket/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }
/* {block 'block_social'} */
class Block_17549389786284c8ca4b1258_67843890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_17549389786284c8ca4b1258_67843890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="social-sharing col-lg-4 col-sm-12">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
       <a class="text-hide mb-2 social-share-btn social-share-btn--footer <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="nofollow noopener"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
