<?php
/* Smarty version 3.1.43, created on 2022-05-12 13:12:47
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\_partials\product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627cebafd146f2_40350140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983322e8d0a5f34d5a18bd03c01db768fc6d91c4' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1652278112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627cebafd146f2_40350140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <div class="product-add-to-cart">
        <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1087873742627cebafcfdea8_28175533', 'product_quantity');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_623392635627cebafd04599_20045934', 'product_availability');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138425507627cebafd0ee38_32991734', 'product_minimal_quantity');
?>
 <?php }?>
    </div><?php }
/* {block 'product_quantity'} */
class Block_1087873742627cebafcfdea8_28175533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_1087873742627cebafcfdea8_28175533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product-quantity row align-items-center no-gutters">
            <label for="quantity_wanted" class="quantity__label col-auto"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
            <div class="qty col-auto">
                <input type="number" name="qty" id="quantity_wanted" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
" class="input-group" min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product_url']))) {?>data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_url'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>>
            </div>

            <div class="add col-auto">
                <button class="btn btn-primary add-to-cart btn-lg btn-block btn-add-to-cart js-add-to-cart" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled <?php }?>>
                <i class="material-icons shopping-cart btn-add-to-cart__icon">&#xE547;</i><span class="btn-add-to-cart__spinner" role="status" aria-hidden="true"></span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            </div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        </div>
        <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_availability'} */
class Block_623392635627cebafd04599_20045934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_623392635627cebafd04599_20045934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <span id="product-availability">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                <i class="material-icons rtl-no-flip product-available text-success">&#xE5CA;</i>
              <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                <i class="material-icons product-last-itemstext-warning">&#xE002;</i>
              <?php } else { ?>
                <i class="material-icons product-unavailable text-danger">&#xE14B;</i>
              <?php }?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
          </span> <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_minimal_quantity'} */
class Block_138425507627cebafd0ee38_32991734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_138425507627cebafd0ee38_32991734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p class="product-minimal-quantity">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>
 <?php }?>
        </p>
        <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
