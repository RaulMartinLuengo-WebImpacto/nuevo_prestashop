<?php
/* Smarty version 3.1.43, created on 2022-05-17 11:20:01
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\modules\comentarioadicional\views\templates\hook\adminproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628368c1c104b8_89550703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2498d59e24b94154b1199f9b15313cb4631df4f8' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\modules\\comentarioadicional\\views\\templates\\hook\\adminproduct.tpl',
      1 => 1652772145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628368c1c104b8_89550703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<style>



</style>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110111628368c1bf3ae8_19359357', 'holi');
?>

<?php }
/* {block 'holi'} */
class Block_110111628368c1bf3ae8_19359357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'holi' => 
  array (
    0 => 'Block_110111628368c1bf3ae8_19359357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="comentario_modulo_producto" class="container">
    <div class="py-5 text-center">
      <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Campo adicional','mod'=>'comentarioadicional'),$_smarty_tpl ) );?>
</h2>
          <div class="col-lg-12 col-xl-12">
            <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Campo multilingue con editor wysiwyg','mod'=>'comentarioadicional'),$_smarty_tpl ) );?>
</label>
                <div class="editorwys tab-content bordered">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <div class="tab-pane translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['default_language']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?>">
                        <textarea class="autoload_rte" name="custom_field_lang_wysiwyg_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['custom_field_lang_wysiwyg']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['custom_field_lang_wysiwyg']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']];
$_prefixVariable2 = ob_get_clean();
if ((isset($_prefixVariable1)) && $_prefixVariable2 != '') {
echo $_smarty_tpl->tpl_vars['custom_field_lang_wysiwyg']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?></textarea>
                    </div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

        </div>
      </div>
</div>
<?php
}
}
/* {/block 'holi'} */
}
