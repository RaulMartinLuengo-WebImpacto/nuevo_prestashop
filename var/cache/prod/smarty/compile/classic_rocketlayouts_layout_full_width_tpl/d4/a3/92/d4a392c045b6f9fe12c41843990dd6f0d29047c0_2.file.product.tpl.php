<?php
/* Smarty version 3.1.43, created on 2022-05-23 16:22:10
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628b989220c5a2_13460816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a392c045b6f9fe12c41843990dd6f0d29047c0' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\product.tpl',
      1 => 1653315655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/price-cents-small.tpl' => 1,
    'file:catalog/_partials/price-without-tax.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-brands.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/stock.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/garantia_devolucion.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-tabs.tpl' => 1,
  ),
),false)) {
function content_628b989220c5a2_13460816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_883290438628b98921c9857_63769370', 'content');
?>

</contact@prestashop.com><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_flags'} */
class Block_229839913628b98921cb4b2_97111357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_2059280361628b98921d0a96_37228548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_1990409616628b98921caee1_66379980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229839913628b98921cb4b2_97111357', 'product_flags', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2059280361628b98921d0a96_37228548', 'product_cover_thumbnails', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1355027995628b98921ca6d6_78777657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section class="page-content--product" id="content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1990409616628b98921caee1_66379980', 'page_content', $this->tplIndex);
?>

                </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_611851806628b98921d2d83_88029811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_408845208628b98921d2758_90156558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611851806628b98921d2d83_88029811', 'page_title', $this->tplIndex);
?>
</h1>
                <!-- <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_header'} */
/* {block "price"} */
class Block_1380672076628b98921d9e83_01832061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/price-cents-small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "price"} */
/* {block 'sin-iva'} */
class Block_1656793067628b98921db073_52727235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'sin-iva'} */
/* {block 'page_header_container'} */
class Block_30458390628b98921d21c2_40384681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_408845208628b98921d2758_90156558', 'page_header', $this->tplIndex);
?>
 -->
                <div class="prices">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1380672076628b98921d9e83_01832061', "price", $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1656793067628b98921db073_52727235', 'sin-iva', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_1127342662628b98921dbde4_63964323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/price-without-tax.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_1239421847628b98921dcc32_00472168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_41378003628b98921e2d16_13596461 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?> <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_1431481341628b98921e7693_52002110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-brands.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_954675641628b98921f44a1_14921927 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_284731409628b98921e8bf2_82256672 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_954675641628b98921f44a1_14921927', 'product_miniature', $this->tplIndex);
?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </section>
                            <?php }?> <?php
}
}
/* {/block 'product_pack'} */
/* {block 'stock'} */
class Block_1372909329628b98921f8260_08879984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/stock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'stock'} */
/* {block 'product_discounts'} */
class Block_1168919757628b98921f92f9_73018533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_2005663759628b98921fa242_99960370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_954955239628b98921fb0c1_92118248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_additional_info'} */
/* {block "garantias"} */
class Block_1208944224628b98921fc1d5_77863278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/garantia_devolucion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block "garantias"} */
/* {block 'product_refresh'} */
class Block_2022233514628b98921fd023_16809442 extends Smarty_Internal_Block
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
class Block_1492197885628b98921e4e94_84188107 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1431481341628b98921e7693_52002110', 'product_variants', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_284731409628b98921e8bf2_82256672', 'product_pack', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1372909329628b98921f8260_08879984', 'stock', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1168919757628b98921f92f9_73018533', 'product_discounts', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2005663759628b98921fa242_99960370', 'product_add_to_cart', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_954955239628b98921fb0c1_92118248', 'product_additional_info', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1208944224628b98921fc1d5_77863278', "garantias", $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2022233514628b98921fd023_16809442', 'product_refresh', $this->tplIndex);
?>

                        </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_275396867628b9892200ad8_06139729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'hook_display_reassurance'} */
class Block_1320980780628b9892202c06_55411883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_1641770938628b9892205ef9_89105454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_1145245539628b9892203aa4_48493956 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1641770938628b9892205ef9_89105454', 'product_miniature', $this->tplIndex);
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
class Block_2113144888628b9892207b08_35924465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_1728354773628b9892208e16_11621253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_696733810628b989220a2a7_89532936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1283177314628b9892209d31_46266843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_696733810628b989220a2a7_89532936', 'page_footer', $this->tplIndex);
?>
</footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'product_tabs'} */
class Block_1867721052628b989220ae11_40217568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'content'} */
class Block_883290438628b98921c9857_63769370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_883290438628b98921c9857_63769370',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1355027995628b98921ca6d6_78777657',
  ),
  'page_content' => 
  array (
    0 => 'Block_1990409616628b98921caee1_66379980',
  ),
  'product_flags' => 
  array (
    0 => 'Block_229839913628b98921cb4b2_97111357',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_2059280361628b98921d0a96_37228548',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_30458390628b98921d21c2_40384681',
  ),
  'page_header' => 
  array (
    0 => 'Block_408845208628b98921d2758_90156558',
  ),
  'page_title' => 
  array (
    0 => 'Block_611851806628b98921d2d83_88029811',
  ),
  'price' => 
  array (
    0 => 'Block_1380672076628b98921d9e83_01832061',
  ),
  'sin-iva' => 
  array (
    0 => 'Block_1656793067628b98921db073_52727235',
  ),
  'product_prices' => 
  array (
    0 => 'Block_1127342662628b98921dbde4_63964323',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_1239421847628b98921dcc32_00472168',
  ),
  'product_customization' => 
  array (
    0 => 'Block_41378003628b98921e2d16_13596461',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1492197885628b98921e4e94_84188107',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1431481341628b98921e7693_52002110',
  ),
  'product_pack' => 
  array (
    0 => 'Block_284731409628b98921e8bf2_82256672',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_954675641628b98921f44a1_14921927',
    1 => 'Block_1641770938628b9892205ef9_89105454',
  ),
  'stock' => 
  array (
    0 => 'Block_1372909329628b98921f8260_08879984',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1168919757628b98921f92f9_73018533',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_2005663759628b98921fa242_99960370',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_954955239628b98921fb0c1_92118248',
  ),
  'garantias' => 
  array (
    0 => 'Block_1208944224628b98921fc1d5_77863278',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_2022233514628b98921fd023_16809442',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_275396867628b9892200ad8_06139729',
    1 => 'Block_1320980780628b9892202c06_55411883',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_1145245539628b9892203aa4_48493956',
  ),
  'product_footer' => 
  array (
    0 => 'Block_2113144888628b9892207b08_35924465',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_1728354773628b9892208e16_11621253',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1283177314628b9892209d31_46266843',
  ),
  'page_footer' => 
  array (
    0 => 'Block_696733810628b989220a2a7_89532936',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_1867721052628b989220ae11_40217568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="main">
        <div class="row">
            <div class="col-lg-4">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355027995628b98921ca6d6_78777657', 'page_content_container', $this->tplIndex);
?>

            </div>
            <div class="col-lg-8">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30458390628b98921d21c2_40384681', 'page_header_container', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1127342662628b98921dbde4_63964323', 'product_prices', $this->tplIndex);
?>

                </div>

                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1239421847628b98921dcc32_00472168', 'product_description_short', $this->tplIndex);
?>

                    </div>
                    <!--Incluyo el el tpl stock para ver disponibilidad en stock-->

                    <!--------------------------------------------------------->
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41378003628b98921e2d16_13596461', 'product_customization', $this->tplIndex);
?>
 <?php }?>
                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1492197885628b98921e4e94_84188107', 'product_buy', $this->tplIndex);
?>

                    </div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_275396867628b9892200ad8_06139729', 'hook_display_reassurance', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1320980780628b9892202c06_55411883', 'hook_display_reassurance', $this->tplIndex);
?>

                </div>
            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1145245539628b9892203aa4_48493956', 'product_accessories', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2113144888628b9892207b08_35924465', 'product_footer', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1728354773628b9892208e16_11621253', 'product_images_modal', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1283177314628b9892209d31_46266843', 'page_footer_container', $this->tplIndex);
?>

    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1867721052628b989220ae11_40217568', 'product_tabs', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'content'} */
}
