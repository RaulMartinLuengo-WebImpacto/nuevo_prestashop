<?php
/* Smarty version 3.1.43, created on 2022-05-12 16:08:26
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627d14daec1294_17527076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a392c045b6f9fe12c41843990dd6f0d29047c0' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\product.tpl',
      1 => 1652364504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/stock.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-tabs.tpl' => 2,
    'file:catalog/_partials/garantia_devolucion.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_627d14daec1294_17527076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_669422909627d14dae898d9_83201630', 'content');
?>

</contact@prestashop.com><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_flags'} */
class Block_1962710128627d14dae8ac80_43469076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_972273789627d14dae90128_50768788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_1937183469627d14dae8a4b0_26068103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1962710128627d14dae8ac80_43469076', 'product_flags', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_972273789627d14dae90128_50768788', 'product_cover_thumbnails', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1355497589627d14dae89fa7_80024937 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section class="page-content--product" id="content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1937183469627d14dae8a4b0_26068103', 'page_content', $this->tplIndex);
?>

                </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_2003313410627d14dae92617_05569443 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1212999940627d14dae921d5_51165712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003313410627d14dae92617_05569443', 'page_title', $this->tplIndex);
?>
</h1>
                <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_2122691769627d14dae91cc7_17506592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212999940627d14dae921d5_51165712', 'page_header', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_1827210770627d14dae966c8_51896714 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_prices'} */
/* {block 'stock'} */
class Block_1978639497627d14dae984f0_82173137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/stock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'stock'} */
/* {block 'product_description_short'} */
class Block_1520224672627d14dae972f0_88465833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

                    </div>
                    <!--Incluyo el el tpl stock para ver disponibilidad en stock-->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1978639497627d14dae984f0_82173137', 'stock', $this->tplIndex);
?>

                    <!--------------------------------------------------------->
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_356186214627d14dae9c7b8_28193460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?> <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_1735827357627d14daea1e03_90376592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_1985464003627d14daeacca4_98636763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_2087884873627d14daea29a7_48125214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                            <section class="product-pack mb-4">
                                <p class="h4">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                </p>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1985464003627d14daeacca4_98636763', 'product_miniature', $this->tplIndex);
?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </section>
                            <?php }?> <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_686826887627d14daeb1b89_95080765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_233472119627d14daeb2951_12840743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_2098061547627d14daeb3617_97241101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_1955994871627d14daeb41f6_91126227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['product_url']))) {?>

                            <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" /> <?php }?> <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_1330418082627d14daea0394_15029000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" />
                            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id" />
                            <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" /> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1735827357627d14daea1e03_90376592', 'product_variants', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2087884873627d14daea29a7_48125214', 'product_pack', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_686826887627d14daeb1b89_95080765', 'product_discounts', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233472119627d14daeb2951_12840743', 'product_add_to_cart', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2098061547627d14daeb3617_97241101', 'product_additional_info', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1955994871627d14daeb41f6_91126227', 'product_refresh', $this->tplIndex);
?>

                        </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_1060826754627d14daeb6274_44470520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_tabs'} */
class Block_297693313627d14daeb7bf2_94208924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_tabs'} */
/* {block "garantias"} */
class Block_293437483627d14daeb8967_70892893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/garantia_devolucion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block "garantias"} */
/* {block 'hook_display_reassurance'} */
class Block_1951451031627d14daeb9465_40812463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_783269150627d14daebb5b4_49094071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_471377903627d14daeb9f62_81599798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories mt-3">
            <p class="products-section-title">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

            </p>
            <div class="products">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_783269150627d14daebb5b4_49094071', 'product_miniature', $this->tplIndex);
?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
        <?php }?> <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_1760690544627d14daebc9b4_13730420 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_1522970110627d14daebd815_20189774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_2010363815627d14daebe743_04161801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_321746711627d14daebe315_35547478 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2010363815627d14daebe743_04161801', 'page_footer', $this->tplIndex);
?>
</footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'product_tabs'} */
class Block_1596697342627d14daebf5d5_32901569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'content'} */
class Block_669422909627d14dae898d9_83201630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_669422909627d14dae898d9_83201630',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1355497589627d14dae89fa7_80024937',
  ),
  'page_content' => 
  array (
    0 => 'Block_1937183469627d14dae8a4b0_26068103',
  ),
  'product_flags' => 
  array (
    0 => 'Block_1962710128627d14dae8ac80_43469076',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_972273789627d14dae90128_50768788',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2122691769627d14dae91cc7_17506592',
  ),
  'page_header' => 
  array (
    0 => 'Block_1212999940627d14dae921d5_51165712',
  ),
  'page_title' => 
  array (
    0 => 'Block_2003313410627d14dae92617_05569443',
  ),
  'product_prices' => 
  array (
    0 => 'Block_1827210770627d14dae966c8_51896714',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_1520224672627d14dae972f0_88465833',
  ),
  'stock' => 
  array (
    0 => 'Block_1978639497627d14dae984f0_82173137',
  ),
  'product_customization' => 
  array (
    0 => 'Block_356186214627d14dae9c7b8_28193460',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1330418082627d14daea0394_15029000',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1735827357627d14daea1e03_90376592',
  ),
  'product_pack' => 
  array (
    0 => 'Block_2087884873627d14daea29a7_48125214',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1985464003627d14daeacca4_98636763',
    1 => 'Block_783269150627d14daebb5b4_49094071',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_686826887627d14daeb1b89_95080765',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_233472119627d14daeb2951_12840743',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_2098061547627d14daeb3617_97241101',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_1955994871627d14daeb41f6_91126227',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_1060826754627d14daeb6274_44470520',
    1 => 'Block_1951451031627d14daeb9465_40812463',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_297693313627d14daeb7bf2_94208924',
    1 => 'Block_1596697342627d14daebf5d5_32901569',
  ),
  'garantias' => 
  array (
    0 => 'Block_293437483627d14daeb8967_70892893',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_471377903627d14daeb9f62_81599798',
  ),
  'product_footer' => 
  array (
    0 => 'Block_1760690544627d14daebc9b4_13730420',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_1522970110627d14daebd815_20189774',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_321746711627d14daebe315_35547478',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2010363815627d14daebe743_04161801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="main">
        <div class="row">
            <div class="col-lg-4">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355497589627d14dae89fa7_80024937', 'page_content_container', $this->tplIndex);
?>

            </div>
            <div class="col-lg-8">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2122691769627d14dae91cc7_17506592', 'page_header_container', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1827210770627d14dae966c8_51896714', 'product_prices', $this->tplIndex);
?>
 -->

                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1520224672627d14dae972f0_88465833', 'product_description_short', $this->tplIndex);
?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_356186214627d14dae9c7b8_28193460', 'product_customization', $this->tplIndex);
?>
 <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1330418082627d14daea0394_15029000', 'product_buy', $this->tplIndex);
?>

                    </div>

                    <!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1060826754627d14daeb6274_44470520', 'hook_display_reassurance', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_297693313627d14daeb7bf2_94208924', 'product_tabs', $this->tplIndex);
?>
 -->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293437483627d14daeb8967_70892893', "garantias", $this->tplIndex);
?>


                    <!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1951451031627d14daeb9465_40812463', 'hook_display_reassurance', $this->tplIndex);
?>
-->
                </div>
            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_471377903627d14daeb9f62_81599798', 'product_accessories', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1760690544627d14daebc9b4_13730420', 'product_footer', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1522970110627d14daebd815_20189774', 'product_images_modal', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_321746711627d14daebe315_35547478', 'page_footer_container', $this->tplIndex);
?>

    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1596697342627d14daebf5d5_32901569', 'product_tabs', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'content'} */
}
