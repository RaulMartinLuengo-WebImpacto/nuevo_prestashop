<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:22:03
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628217bb926d82_49270692',
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
function content_628217bb926d82_49270692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_447866710628217bb923333_34301881', 'pageWrapperClass');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452207655628217bb923dd7_69520796', 'page_content_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_450470405628217bb9260d7_25070639', 'page_footer_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'pageWrapperClass'} */
class Block_447866710628217bb923333_34301881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageWrapperClass' => 
  array (
    0 => 'Block_447866710628217bb923333_34301881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageWrapperClass'} */
/* {block 'page_content_top'} */
class Block_1947439687628217bb924238_45165543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_67797267628217bb924ce7_92216845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_712962693628217bb9248b8_94565262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67797267628217bb924ce7_92216845', 'hook_home', $this->tplIndex);
?>


        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_452207655628217bb923dd7_69520796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_452207655628217bb923dd7_69520796',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1947439687628217bb924238_45165543',
  ),
  'page_content' => 
  array (
    0 => 'Block_712962693628217bb9248b8_94565262',
  ),
  'hook_home' => 
  array (
    0 => 'Block_67797267628217bb924ce7_92216845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1947439687628217bb924238_45165543', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_712962693628217bb9248b8_94565262', 'page_content', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1512459011628217bb926511_58882306 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_450470405628217bb9260d7_25070639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_450470405628217bb9260d7_25070639',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1512459011628217bb926511_58882306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="page-footer--home"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1512459011628217bb926511_58882306', 'page_footer', $this->tplIndex);
?>
</footer>
<?php
}
}
/* {/block 'page_footer_container'} */
}
