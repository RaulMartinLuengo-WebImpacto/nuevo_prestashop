<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:16:59
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6282168b5a1dc8_94562824',
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
function content_6282168b5a1dc8_94562824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4331813066282168b571609_13898832', 'content');
?>

</contact@prestashop.com><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_flags'} */
class Block_18067597226282168b572528_22624963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_19635938286282168b576929_00908139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_20060628016282168b5720d4_95884196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18067597226282168b572528_22624963', 'product_flags', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19635938286282168b576929_00908139', 'product_cover_thumbnails', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3860340396282168b571c41_92192427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section class="page-content--product" id="content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20060628016282168b5720d4_95884196', 'page_content', $this->tplIndex);
?>

                </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_3249410936282168b578506_41625435 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_5352150096282168b5780d7_16261296 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3249410936282168b578506_41625435', 'page_title', $this->tplIndex);
?>
</h1>
                <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_1002480406282168b577c59_27805104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5352150096282168b5780d7_16261296', 'page_header', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_18115023976282168b57c835_58643855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_prices'} */
/* {block 'stock'} */
class Block_759729616282168b57e766_21980558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/stock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'stock'} */
/* {block 'product_description_short'} */
class Block_15546846106282168b57d4b9_54747773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

                    </div>
                    <!--Incluyo el el tpl stock para ver disponibilidad en stock-->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_759729616282168b57e766_21980558', 'stock', $this->tplIndex);
?>

                    <!--------------------------------------------------------->
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_21125376056282168b582f97_76259825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?> <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_15327237216282168b5884d8_58776946 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_15770076846282168b591087_44481611 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_2836303856282168b5891a1_42199741 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15770076846282168b591087_44481611', 'product_miniature', $this->tplIndex);
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
class Block_17563855886282168b5934e1_66377245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_14204694046282168b594084_19434858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_11893303546282168b594bd3_80321358 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_13903630536282168b595713_28602557 extends Smarty_Internal_Block
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
class Block_10658820076282168b5864a8_66930371 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15327237216282168b5884d8_58776946', 'product_variants', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2836303856282168b5891a1_42199741', 'product_pack', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17563855886282168b5934e1_66377245', 'product_discounts', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14204694046282168b594084_19434858', 'product_add_to_cart', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11893303546282168b594bd3_80321358', 'product_additional_info', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13903630536282168b595713_28602557', 'product_refresh', $this->tplIndex);
?>

                        </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_15083087076282168b5976a3_99470659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_tabs'} */
class Block_15206471286282168b599012_08383878 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_tabs'} */
/* {block "garantias"} */
class Block_12847530426282168b599dc0_74579041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/garantia_devolucion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block "garantias"} */
/* {block 'hook_display_reassurance'} */
class Block_6871602616282168b59a927_92119851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_17353794926282168b59ce93_44030183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_11350335736282168b59b451_21802114 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17353794926282168b59ce93_44030183', 'product_miniature', $this->tplIndex);
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
class Block_13041602216282168b59e338_17060086 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_19585334366282168b59f254_94055362 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_12898525446282168b5a0232_01468129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_20879100636282168b59fdf9_93172659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12898525446282168b5a0232_01468129', 'page_footer', $this->tplIndex);
?>
</footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'product_tabs'} */
class Block_10413224546282168b5a0b45_59172642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'content'} */
class Block_4331813066282168b571609_13898832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4331813066282168b571609_13898832',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_3860340396282168b571c41_92192427',
  ),
  'page_content' => 
  array (
    0 => 'Block_20060628016282168b5720d4_95884196',
  ),
  'product_flags' => 
  array (
    0 => 'Block_18067597226282168b572528_22624963',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_19635938286282168b576929_00908139',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1002480406282168b577c59_27805104',
  ),
  'page_header' => 
  array (
    0 => 'Block_5352150096282168b5780d7_16261296',
  ),
  'page_title' => 
  array (
    0 => 'Block_3249410936282168b578506_41625435',
  ),
  'product_prices' => 
  array (
    0 => 'Block_18115023976282168b57c835_58643855',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_15546846106282168b57d4b9_54747773',
  ),
  'stock' => 
  array (
    0 => 'Block_759729616282168b57e766_21980558',
  ),
  'product_customization' => 
  array (
    0 => 'Block_21125376056282168b582f97_76259825',
  ),
  'product_buy' => 
  array (
    0 => 'Block_10658820076282168b5864a8_66930371',
  ),
  'product_variants' => 
  array (
    0 => 'Block_15327237216282168b5884d8_58776946',
  ),
  'product_pack' => 
  array (
    0 => 'Block_2836303856282168b5891a1_42199741',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_15770076846282168b591087_44481611',
    1 => 'Block_17353794926282168b59ce93_44030183',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_17563855886282168b5934e1_66377245',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_14204694046282168b594084_19434858',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_11893303546282168b594bd3_80321358',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_13903630536282168b595713_28602557',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_15083087076282168b5976a3_99470659',
    1 => 'Block_6871602616282168b59a927_92119851',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_15206471286282168b599012_08383878',
    1 => 'Block_10413224546282168b5a0b45_59172642',
  ),
  'garantias' => 
  array (
    0 => 'Block_12847530426282168b599dc0_74579041',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_11350335736282168b59b451_21802114',
  ),
  'product_footer' => 
  array (
    0 => 'Block_13041602216282168b59e338_17060086',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_19585334366282168b59f254_94055362',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_20879100636282168b59fdf9_93172659',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12898525446282168b5a0232_01468129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="main">
        <div class="row">
            <div class="col-lg-4">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3860340396282168b571c41_92192427', 'page_content_container', $this->tplIndex);
?>

            </div>
            <div class="col-lg-8">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1002480406282168b577c59_27805104', 'page_header_container', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18115023976282168b57c835_58643855', 'product_prices', $this->tplIndex);
?>
 -->

                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15546846106282168b57d4b9_54747773', 'product_description_short', $this->tplIndex);
?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21125376056282168b582f97_76259825', 'product_customization', $this->tplIndex);
?>
 <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10658820076282168b5864a8_66930371', 'product_buy', $this->tplIndex);
?>

                    </div>

                    <!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15083087076282168b5976a3_99470659', 'hook_display_reassurance', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15206471286282168b599012_08383878', 'product_tabs', $this->tplIndex);
?>
 -->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12847530426282168b599dc0_74579041', "garantias", $this->tplIndex);
?>


                    <!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6871602616282168b59a927_92119851', 'hook_display_reassurance', $this->tplIndex);
?>
-->
                </div>
            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11350335736282168b59b451_21802114', 'product_accessories', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13041602216282168b59e338_17060086', 'product_footer', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19585334366282168b59f254_94055362', 'product_images_modal', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20879100636282168b59fdf9_93172659', 'page_footer_container', $this->tplIndex);
?>

    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10413224546282168b5a0b45_59172642', 'product_tabs', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'content'} */
}
