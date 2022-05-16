<?php
/* Smarty version 3.1.43, created on 2022-05-12 15:52:17
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627d11114eb664_49548143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88f667a1f32417cee56e9f8a913a620222e2a65' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\layouts\\layout-left-column.tpl',
      1 => 1651826370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627d11114eb664_49548143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1007786593627d11114e3a45_02918656', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_240031191627d11114e5219_12511664', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_1007786593627d11114e3a45_02918656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1007786593627d11114e3a45_02918656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'contentWrapperClass'} */
class Block_1482867194627d11114e5e20_84354516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
left-column col-12 col-lg-9<?php
}
}
/* {/block 'contentWrapperClass'} */
/* {block 'content'} */
class Block_1784185325627d11114e9db4_08523580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_240031191627d11114e5219_12511664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_240031191627d11114e5219_12511664',
  ),
  'contentWrapperClass' => 
  array (
    0 => 'Block_1482867194627d11114e5e20_84354516',
  ),
  'content' => 
  array (
    0 => 'Block_1784185325627d11114e9db4_08523580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1482867194627d11114e5e20_84354516', 'contentWrapperClass', $this->tplIndex);
?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1784185325627d11114e9db4_08523580', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
