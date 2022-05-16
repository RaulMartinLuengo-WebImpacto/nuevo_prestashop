<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:22:07
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628217bf6988e1_03338659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8119bda48777a3571fa5e08ebe419a495cc5584b' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\_partials\\header.tpl',
      1 => 1652104813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628217bf6988e1_03338659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_917998193628217bf694219_65507732', 'header_banner');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1162752832628217bf6951b2_06262216', 'header_nav');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_810753037628217bf696283_92804667', 'header_top');
?>

</contact@prestashop.com><?php }
/* {block 'header_banner'} */
class Block_917998193628217bf694219_65507732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_917998193628217bf694219_65507732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-banner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>
</div>
    <?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_1162752832628217bf6951b2_06262216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_1162752832628217bf6951b2_06262216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-nav u-bor-bot">
        <div class="header__container container">
            <div class="u-a-i-c d--flex-around visible--desktop">
                <!-- <div class="small">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

                </div> -->
                <div class="header-nav__right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
            </div>
        </div>
    </div>
    <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_810753037628217bf696283_92804667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_810753037628217bf696283_92804667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-top d--flex-between u-a-i-c">
        <button class="visible--mobile btn" id="menu-icon" data-toggle="modal" data-target="#mobile_top_menu_wrapper">
      <i class="material-icons d-inline">&#xE5D2;</i>
    </button>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="header__logo header-top__col">
            <img class="logo img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
        </a>
        <div class="header__search"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>
</div>
        <div class="header__right header-top__col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
</div>
    </div>
    <div class="container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>
</div>
    <?php
}
}
/* {/block 'header_top'} */
}
