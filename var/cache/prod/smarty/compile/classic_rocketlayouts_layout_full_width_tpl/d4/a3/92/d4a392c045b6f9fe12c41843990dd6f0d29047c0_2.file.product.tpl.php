<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:20:43
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6282176b2b7905_58731646',
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
function content_6282176b2b7905_58731646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20196753386282176b28f4d1_15371141', 'content');
?>

</contact@prestashop.com><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_flags'} */
class Block_9264407956282176b290388_82710754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_10110151136282176b291160_26617835 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_12282254296282176b28ff41_22628267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9264407956282176b290388_82710754', 'product_flags', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10110151136282176b291160_26617835', 'product_cover_thumbnails', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5118857076282176b28fac6_06537691 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section class="page-content--product" id="content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12282254296282176b28ff41_22628267', 'page_content', $this->tplIndex);
?>

                </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_9192318166282176b292b49_81608434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_7884810146282176b292726_27254929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9192318166282176b292b49_81608434', 'page_title', $this->tplIndex);
?>
</h1>
                <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_11735609646282176b2922e3_17896031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7884810146282176b292726_27254929', 'page_header', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_1675235516282176b294198_37363014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_prices'} */
/* {block 'stock'} */
class Block_19780414216282176b295e07_16196153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/stock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'stock'} */
/* {block 'product_description_short'} */
class Block_21245611156282176b294ce5_05752335 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

                    </div>
                    <!--Incluyo el el tpl stock para ver disponibilidad en stock-->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19780414216282176b295e07_16196153', 'stock', $this->tplIndex);
?>

                    <!--------------------------------------------------------->
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_17285328606282176b297fb6_68168096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?> <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_13853717946282176b29ad23_10142973 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_2652411286282176b2a1f73_41095585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_10564041206282176b29b875_20792909 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2652411286282176b2a1f73_41095585', 'product_miniature', $this->tplIndex);
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
class Block_19384697416282176b2a47c1_69219911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_19884303716282176b2a54e7_31204539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_8091442396282176b2a6781_12334545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_8434682686282176b2a7836_42308853 extends Smarty_Internal_Block
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
class Block_7882029096282176b299424_46941299 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13853717946282176b29ad23_10142973', 'product_variants', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10564041206282176b29b875_20792909', 'product_pack', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19384697416282176b2a47c1_69219911', 'product_discounts', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19884303716282176b2a54e7_31204539', 'product_add_to_cart', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8091442396282176b2a6781_12334545', 'product_additional_info', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8434682686282176b2a7836_42308853', 'product_refresh', $this->tplIndex);
?>

                        </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_3220435876282176b2ab0e2_50675989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_tabs'} */
class Block_2393892236282176b2ae3c2_78637201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_tabs'} */
/* {block "garantias"} */
class Block_16955107946282176b2af367_80060945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/garantia_devolucion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block "garantias"} */
/* {block 'hook_display_reassurance'} */
class Block_11513436636282176b2b0100_95212597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_6818626806282176b2b2a37_92770961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_19582135846282176b2b0d07_55650249 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6818626806282176b2b2a37_92770961', 'product_miniature', $this->tplIndex);
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
class Block_7624743766282176b2b3f63_19911154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_18087141056282176b2b4e06_31506743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_16838044046282176b2b5d79_86680549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11398640736282176b2b5932_40340296 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16838044046282176b2b5d79_86680549', 'page_footer', $this->tplIndex);
?>
</footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'product_tabs'} */
class Block_13898347976282176b2b6683_06950939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'content'} */
class Block_20196753386282176b28f4d1_15371141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20196753386282176b28f4d1_15371141',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5118857076282176b28fac6_06537691',
  ),
  'page_content' => 
  array (
    0 => 'Block_12282254296282176b28ff41_22628267',
  ),
  'product_flags' => 
  array (
    0 => 'Block_9264407956282176b290388_82710754',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_10110151136282176b291160_26617835',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11735609646282176b2922e3_17896031',
  ),
  'page_header' => 
  array (
    0 => 'Block_7884810146282176b292726_27254929',
  ),
  'page_title' => 
  array (
    0 => 'Block_9192318166282176b292b49_81608434',
  ),
  'product_prices' => 
  array (
    0 => 'Block_1675235516282176b294198_37363014',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_21245611156282176b294ce5_05752335',
  ),
  'stock' => 
  array (
    0 => 'Block_19780414216282176b295e07_16196153',
  ),
  'product_customization' => 
  array (
    0 => 'Block_17285328606282176b297fb6_68168096',
  ),
  'product_buy' => 
  array (
    0 => 'Block_7882029096282176b299424_46941299',
  ),
  'product_variants' => 
  array (
    0 => 'Block_13853717946282176b29ad23_10142973',
  ),
  'product_pack' => 
  array (
    0 => 'Block_10564041206282176b29b875_20792909',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_2652411286282176b2a1f73_41095585',
    1 => 'Block_6818626806282176b2b2a37_92770961',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_19384697416282176b2a47c1_69219911',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_19884303716282176b2a54e7_31204539',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_8091442396282176b2a6781_12334545',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_8434682686282176b2a7836_42308853',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_3220435876282176b2ab0e2_50675989',
    1 => 'Block_11513436636282176b2b0100_95212597',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_2393892236282176b2ae3c2_78637201',
    1 => 'Block_13898347976282176b2b6683_06950939',
  ),
  'garantias' => 
  array (
    0 => 'Block_16955107946282176b2af367_80060945',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_19582135846282176b2b0d07_55650249',
  ),
  'product_footer' => 
  array (
    0 => 'Block_7624743766282176b2b3f63_19911154',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_18087141056282176b2b4e06_31506743',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11398640736282176b2b5932_40340296',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16838044046282176b2b5d79_86680549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="main">
        <div class="row">
            <div class="col-lg-4">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5118857076282176b28fac6_06537691', 'page_content_container', $this->tplIndex);
?>

            </div>
            <div class="col-lg-8">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11735609646282176b2922e3_17896031', 'page_header_container', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1675235516282176b294198_37363014', 'product_prices', $this->tplIndex);
?>
 -->

                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21245611156282176b294ce5_05752335', 'product_description_short', $this->tplIndex);
?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17285328606282176b297fb6_68168096', 'product_customization', $this->tplIndex);
?>
 <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7882029096282176b299424_46941299', 'product_buy', $this->tplIndex);
?>

                    </div>

                    <!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3220435876282176b2ab0e2_50675989', 'hook_display_reassurance', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2393892236282176b2ae3c2_78637201', 'product_tabs', $this->tplIndex);
?>
 -->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16955107946282176b2af367_80060945', "garantias", $this->tplIndex);
?>


                    <!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11513436636282176b2b0100_95212597', 'hook_display_reassurance', $this->tplIndex);
?>
-->
                </div>
            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19582135846282176b2b0d07_55650249', 'product_accessories', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7624743766282176b2b3f63_19911154', 'product_footer', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18087141056282176b2b4e06_31506743', 'product_images_modal', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11398640736282176b2b5932_40340296', 'page_footer_container', $this->tplIndex);
?>

    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13898347976282176b2b6683_06950939', 'product_tabs', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'content'} */
}
