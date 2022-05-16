<?php
/* Smarty version 3.1.43, created on 2022-05-12 13:12:45
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627cebad19d0d5_75185519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d8c6a83b500d481086815723f1fec247a8cc8a5' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\layouts\\layout-full-width.tpl',
      1 => 1651826370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627cebad19d0d5_75185519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1492347751627cebad196f52_65849021', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_784409886627cebad197e42_21607511', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_358411604627cebad198ae4_04746865', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1492347751627cebad196f52_65849021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1492347751627cebad196f52_65849021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_784409886627cebad197e42_21607511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_784409886627cebad197e42_21607511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'contentWrapperClass'} */
class Block_1643982129627cebad1992d7_81338220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
col-12<?php
}
}
/* {/block 'contentWrapperClass'} */
/* {block 'content'} */
class Block_1417494742627cebad19add5_64287520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_358411604627cebad198ae4_04746865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_358411604627cebad198ae4_04746865',
  ),
  'contentWrapperClass' => 
  array (
    0 => 'Block_1643982129627cebad1992d7_81338220',
  ),
  'content' => 
  array (
    0 => 'Block_1417494742627cebad19add5_64287520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1643982129627cebad1992d7_81338220', 'contentWrapperClass', $this->tplIndex);
?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1417494742627cebad19add5_64287520', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
