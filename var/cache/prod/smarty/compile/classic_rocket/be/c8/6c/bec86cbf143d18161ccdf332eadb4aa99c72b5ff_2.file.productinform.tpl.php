<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:20:45
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\modules\comentarioadicional\views\templates\hook\productinform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6282176d85a291_18024896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bec86cbf143d18161ccdf332eadb4aa99c72b5ff' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\modules\\comentarioadicional\\views\\templates\\hook\\productinform.tpl',
      1 => 1614979433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282176d85a291_18024896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<style>



</style>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5185120656282176d859243_93022467', 'holi');
?>

<?php }
/* {block 'holi'} */
class Block_5185120656282176d859243_93022467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'holi' => 
  array (
    0 => 'Block_5185120656282176d859243_93022467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="comentario_modulo_producto" class="container">
    <div class="py-5 text-center">
            <p class="lead"> <?php echo $_smarty_tpl->tpl_vars['custom_field_lang_wysiwyg']->value;?>
</p>
      </div>
</div>
<?php
}
}
/* {/block 'holi'} */
}
