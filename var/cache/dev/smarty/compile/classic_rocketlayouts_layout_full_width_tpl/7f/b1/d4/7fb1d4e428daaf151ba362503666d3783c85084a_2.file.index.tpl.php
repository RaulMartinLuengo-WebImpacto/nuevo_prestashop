<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:16:44
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6282167c0d1f73_31576305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fb1d4e428daaf151ba362503666d3783c85084a' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\index.tpl',
      1 => 1651826369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282167c0d1f73_31576305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17770064836282167c0cd6e5_55962608', 'pageWrapperClass');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_999679526282167c0ce453_68986826', 'page_content_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14701871586282167c0d0d06_77970090', 'page_footer_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'pageWrapperClass'} */
class Block_17770064836282167c0cd6e5_55962608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageWrapperClass' => 
  array (
    0 => 'Block_17770064836282167c0cd6e5_55962608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageWrapperClass'} */
/* {block 'page_content_top'} */
class Block_20445104746282167c0ce937_46993215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7750032636282167c0cf4b7_65853765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_16205902496282167c0cf030_66207366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7750032636282167c0cf4b7_65853765', 'hook_home', $this->tplIndex);
?>


        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_999679526282167c0ce453_68986826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_999679526282167c0ce453_68986826',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20445104746282167c0ce937_46993215',
  ),
  'page_content' => 
  array (
    0 => 'Block_16205902496282167c0cf030_66207366',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7750032636282167c0cf4b7_65853765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20445104746282167c0ce937_46993215', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16205902496282167c0cf030_66207366', 'page_content', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12996494516282167c0d1303_44815327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14701871586282167c0d0d06_77970090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_14701871586282167c0d0d06_77970090',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12996494516282167c0d1303_44815327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="page-footer--home"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12996494516282167c0d1303_44815327', 'page_footer', $this->tplIndex);
?>
</footer>
<?php
}
}
/* {/block 'page_footer_container'} */
}
