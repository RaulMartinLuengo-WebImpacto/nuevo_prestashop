<?php
/* Smarty version 3.1.43, created on 2022-05-12 13:12:51
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627cebb3a11ec6_73590906',
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
function content_627cebb3a11ec6_73590906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1897422121627cebb39ff708_55087311', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'pageWrapperClass'} */
class Block_1199491519627cebb3a004b7_75150911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-wrapper <?php
}
}
/* {/block 'pageWrapperClass'} */
/* {block 'pageHeaderClass'} */
class Block_416525432627cebb3a05656_67732059 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-header <?php
}
}
/* {/block 'pageHeaderClass'} */
/* {block 'page_title'} */
class Block_1621971529627cebb3a04f57_43558985 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_416525432627cebb3a05656_67732059', 'pageHeaderClass', $this->tplIndex);
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
class Block_1002298999627cebb3a044e3_78857028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1621971529627cebb3a04f57_43558985', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'pageContentClass'} */
class Block_1532932363627cebb3a0b069_06656245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-content <?php
}
}
/* {/block 'pageContentClass'} */
/* {block 'page_content_top'} */
class Block_1587437612627cebb3a0c8f6_76625691 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_63892903627cebb3a0d4f1_79428200 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_615229478627cebb3a0a728_12548753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1532932363627cebb3a0b069_06656245', 'pageContentClass', $this->tplIndex);
?>
page-content--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1587437612627cebb3a0c8f6_76625691', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63892903627cebb3a0d4f1_79428200', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'pageFooterClass'} */
class Block_1836505060627cebb3a0ee62_66274425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
page-footer <?php
}
}
/* {/block 'pageFooterClass'} */
/* {block 'page_footer'} */
class Block_1964936983627cebb3a10516_32446599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1249594014627cebb3a0e6b6_30516806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1836505060627cebb3a0ee62_66274425', 'pageFooterClass', $this->tplIndex);
?>
page-footer--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1964936983627cebb3a10516_32446599', 'page_footer', $this->tplIndex);
?>
</footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1897422121627cebb39ff708_55087311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1897422121627cebb39ff708_55087311',
  ),
  'pageWrapperClass' => 
  array (
    0 => 'Block_1199491519627cebb3a004b7_75150911',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1002298999627cebb3a044e3_78857028',
  ),
  'page_title' => 
  array (
    0 => 'Block_1621971529627cebb3a04f57_43558985',
  ),
  'pageHeaderClass' => 
  array (
    0 => 'Block_416525432627cebb3a05656_67732059',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_615229478627cebb3a0a728_12548753',
  ),
  'pageContentClass' => 
  array (
    0 => 'Block_1532932363627cebb3a0b069_06656245',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1587437612627cebb3a0c8f6_76625691',
  ),
  'page_content' => 
  array (
    0 => 'Block_63892903627cebb3a0d4f1_79428200',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1249594014627cebb3a0e6b6_30516806',
  ),
  'pageFooterClass' => 
  array (
    0 => 'Block_1836505060627cebb3a0ee62_66274425',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1964936983627cebb3a10516_32446599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1199491519627cebb3a004b7_75150911', 'pageWrapperClass', $this->tplIndex);
?>
page-wrapper--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1002298999627cebb3a044e3_78857028', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_615229478627cebb3a0a728_12548753', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1249594014627cebb3a0e6b6_30516806', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
