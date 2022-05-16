<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:22:03
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628217bb9ff560_11135728',
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
function content_628217bb9ff560_11135728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556234736628217bb9f6791_86797747', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'pageWrapperClass'} */
class Block_929887542628217bb9f6d70_08200085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-wrapper <?php
}
}
/* {/block 'pageWrapperClass'} */
/* {block 'pageHeaderClass'} */
class Block_1949080150628217bb9f8c65_75566270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-header <?php
}
}
/* {/block 'pageHeaderClass'} */
/* {block 'page_title'} */
class Block_664396780628217bb9f8706_82203745 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1949080150628217bb9f8c65_75566270', 'pageHeaderClass', $this->tplIndex);
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
class Block_2094195275628217bb9f7fe3_73149950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_664396780628217bb9f8706_82203745', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'pageContentClass'} */
class Block_925570545628217bb9fba14_00920591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-content <?php
}
}
/* {/block 'pageContentClass'} */
/* {block 'page_content_top'} */
class Block_1822253836628217bb9fc7e7_16789380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1270779110628217bb9fce65_38993415 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1003001676628217bb9fb5b8_48190204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_925570545628217bb9fba14_00920591', 'pageContentClass', $this->tplIndex);
?>
page-content--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1822253836628217bb9fc7e7_16789380', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270779110628217bb9fce65_38993415', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'pageFooterClass'} */
class Block_1362970963628217bb9fdc78_28094335 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-footer <?php
}
}
/* {/block 'pageFooterClass'} */
/* {block 'page_footer'} */
class Block_1009163199628217bb9fe8f6_55850874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_238921889628217bb9fd848_90533871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1362970963628217bb9fdc78_28094335', 'pageFooterClass', $this->tplIndex);
?>
page-footer--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1009163199628217bb9fe8f6_55850874', 'page_footer', $this->tplIndex);
?>
</footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_556234736628217bb9f6791_86797747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_556234736628217bb9f6791_86797747',
  ),
  'pageWrapperClass' => 
  array (
    0 => 'Block_929887542628217bb9f6d70_08200085',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2094195275628217bb9f7fe3_73149950',
  ),
  'page_title' => 
  array (
    0 => 'Block_664396780628217bb9f8706_82203745',
  ),
  'pageHeaderClass' => 
  array (
    0 => 'Block_1949080150628217bb9f8c65_75566270',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1003001676628217bb9fb5b8_48190204',
  ),
  'pageContentClass' => 
  array (
    0 => 'Block_925570545628217bb9fba14_00920591',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1822253836628217bb9fc7e7_16789380',
  ),
  'page_content' => 
  array (
    0 => 'Block_1270779110628217bb9fce65_38993415',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_238921889628217bb9fd848_90533871',
  ),
  'pageFooterClass' => 
  array (
    0 => 'Block_1362970963628217bb9fdc78_28094335',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1009163199628217bb9fe8f6_55850874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_929887542628217bb9f6d70_08200085', 'pageWrapperClass', $this->tplIndex);
?>
page-wrapper--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2094195275628217bb9f7fe3_73149950', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1003001676628217bb9fb5b8_48190204', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_238921889628217bb9fd848_90533871', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
