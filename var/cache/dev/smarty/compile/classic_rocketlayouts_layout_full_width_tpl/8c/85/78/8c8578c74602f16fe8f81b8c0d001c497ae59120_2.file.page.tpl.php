<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:16:44
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6282167c1eae22_02318855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c8578c74602f16fe8f81b8c0d001c497ae59120' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\page.tpl',
      1 => 1652103025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282167c1eae22_02318855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1309083526282167c1e1681_37895661', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'pageWrapperClass'} */
class Block_19704799866282167c1e1c36_02684374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-wrapper <?php
}
}
/* {/block 'pageWrapperClass'} */
/* {block 'pageHeaderClass'} */
class Block_17855164436282167c1e36d7_06059976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-header <?php
}
}
/* {/block 'pageHeaderClass'} */
/* {block 'page_title'} */
class Block_18707811096282167c1e3269_69050654 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17855164436282167c1e36d7_06059976', 'pageHeaderClass', $this->tplIndex);
?>
page-header--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_20597963636282167c1e2c31_08541290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18707811096282167c1e3269_69050654', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'pageContentClass'} */
class Block_11321210476282167c1e6f66_04885486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-content <?php
}
}
/* {/block 'pageContentClass'} */
/* {block 'page_content_top'} */
class Block_20683160016282167c1e7df4_18006889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16169350106282167c1e8480_39697176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9649913516282167c1e6ac4_51967388 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11321210476282167c1e6f66_04885486', 'pageContentClass', $this->tplIndex);
?>
page-content--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20683160016282167c1e7df4_18006889', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16169350106282167c1e8480_39697176', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'pageFooterClass'} */
class Block_10318905626282167c1e9367_77551191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-footer <?php
}
}
/* {/block 'pageFooterClass'} */
/* {block 'page_footer'} */
class Block_3190305076282167c1ea0e9_59425522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1924026236282167c1e8f06_92945003 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10318905626282167c1e9367_77551191', 'pageFooterClass', $this->tplIndex);
?>
page-footer--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3190305076282167c1ea0e9_59425522', 'page_footer', $this->tplIndex);
?>
</footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1309083526282167c1e1681_37895661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1309083526282167c1e1681_37895661',
  ),
  'pageWrapperClass' => 
  array (
    0 => 'Block_19704799866282167c1e1c36_02684374',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20597963636282167c1e2c31_08541290',
  ),
  'page_title' => 
  array (
    0 => 'Block_18707811096282167c1e3269_69050654',
  ),
  'pageHeaderClass' => 
  array (
    0 => 'Block_17855164436282167c1e36d7_06059976',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9649913516282167c1e6ac4_51967388',
  ),
  'pageContentClass' => 
  array (
    0 => 'Block_11321210476282167c1e6f66_04885486',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20683160016282167c1e7df4_18006889',
  ),
  'page_content' => 
  array (
    0 => 'Block_16169350106282167c1e8480_39697176',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1924026236282167c1e8f06_92945003',
  ),
  'pageFooterClass' => 
  array (
    0 => 'Block_10318905626282167c1e9367_77551191',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3190305076282167c1ea0e9_59425522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19704799866282167c1e1c36_02684374', 'pageWrapperClass', $this->tplIndex);
?>
page-wrapper--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20597963636282167c1e2c31_08541290', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9649913516282167c1e6ac4_51967388', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1924026236282167c1e8f06_92945003', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
