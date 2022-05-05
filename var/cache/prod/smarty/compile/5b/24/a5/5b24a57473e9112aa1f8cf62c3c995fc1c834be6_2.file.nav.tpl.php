<?php
/* Smarty version 3.1.43, created on 2022-05-05 13:15:46
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\modules\clima\views\templates\hook\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273b1e2a89dd1_39521104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b24a57473e9112aa1f8cf62c3c995fc1c834be6' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\modules\\clima\\views\\templates\\hook\\nav.tpl',
      1 => 1614975996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273b1e2a89dd1_39521104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<style>

#clima_bloque{
    border:2px dotted black;
}

</style>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6475657006273b1e2a88755_10772020', 'clima');
?>

<?php }
/* {block 'clima'} */
class Block_6475657006273b1e2a88755_10772020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'clima' => 
  array (
    0 => 'Block_6475657006273b1e2a88755_10772020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="clima_bloque" class=" col-xs-12 col-sm-12">
	<h4>El tiempo en nuestra zona</h4>
    <ul class="toggle-footer">
		<li class="item"><i class="material-icons">location_city</i> Ciudad : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
</li>
		<li class="item"><i class="material-icons">beach_access</i> Viento: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wind']->value, ENT_QUOTES, 'UTF-8');?>
 mps</li>
		<li class="item"><i class="material-icons">settings_system_daydream</i> Tiempo: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weather']->value, ENT_QUOTES, 'UTF-8');?>
</li>
		<li class="item"><i class="material-icons">ac_unit</i> Temperatura: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['temp']->value, ENT_QUOTES, 'UTF-8');?>
 Cº</li>
		<li class="item"><i class="material-icons">devices</i> IP: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IP']->value, ENT_QUOTES, 'UTF-8');?>
</li>
    </ul>
</section>
<?php
}
}
/* {/block 'clima'} */
}
