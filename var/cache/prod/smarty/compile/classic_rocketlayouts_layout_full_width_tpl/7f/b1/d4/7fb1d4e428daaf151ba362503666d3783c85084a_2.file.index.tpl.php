<?php
/* Smarty version 3.1.43, created on 2022-05-12 15:52:13
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627d110d455de7_33107421',
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
function content_627d110d455de7_33107421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1038898748627d110d44b1d5_50175106', 'pageWrapperClass');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291148763627d110d44c768_21265128', 'page_content_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_307013536627d110d453a39_86378865', 'page_footer_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'pageWrapperClass'} */
class Block_1038898748627d110d44b1d5_50175106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageWrapperClass' => 
  array (
    0 => 'Block_1038898748627d110d44b1d5_50175106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageWrapperClass'} */
/* {block 'page_content_top'} */
class Block_2082617479627d110d44d0f0_78577043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_431590706627d110d44fbc7_91673669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1701910312627d110d44ddd7_37269261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_431590706627d110d44fbc7_91673669', 'hook_home', $this->tplIndex);
?>


        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_291148763627d110d44c768_21265128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_291148763627d110d44c768_21265128',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2082617479627d110d44d0f0_78577043',
  ),
  'page_content' => 
  array (
    0 => 'Block_1701910312627d110d44ddd7_37269261',
  ),
  'hook_home' => 
  array (
    0 => 'Block_431590706627d110d44fbc7_91673669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2082617479627d110d44d0f0_78577043', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1701910312627d110d44ddd7_37269261', 'page_content', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_243146744627d110d454900_30079949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_307013536627d110d453a39_86378865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_307013536627d110d453a39_86378865',
  ),
  'page_footer' => 
  array (
    0 => 'Block_243146744627d110d454900_30079949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="page-footer--home"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_243146744627d110d454900_30079949', 'page_footer', $this->tplIndex);
?>
</footer>
<?php
}
}
/* {/block 'page_footer_container'} */
}
