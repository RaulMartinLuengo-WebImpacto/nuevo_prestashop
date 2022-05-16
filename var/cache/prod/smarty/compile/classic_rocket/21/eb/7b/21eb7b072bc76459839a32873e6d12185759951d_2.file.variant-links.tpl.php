<?php
/* Smarty version 3.1.43, created on 2022-05-12 16:07:28
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627d14a00739e3_95811652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21eb7b072bc76459839a32873e6d12185759951d' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1651826369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627d14a00739e3_95811652 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="variant-links">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant', false, NULL, 'variantslist', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_variantslist']->value['iteration']++;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_variantslist']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_variantslist']->value['iteration'] : null) < 6) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
               class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
 mx-1"
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
            ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ((count($_smarty_tpl->tpl_vars['variants']->value)) > 5) {?>
        <span class="js-count count">+<?php echo htmlspecialchars((count($_smarty_tpl->tpl_vars['variants']->value))-5, ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>
</div>
<?php }
}
