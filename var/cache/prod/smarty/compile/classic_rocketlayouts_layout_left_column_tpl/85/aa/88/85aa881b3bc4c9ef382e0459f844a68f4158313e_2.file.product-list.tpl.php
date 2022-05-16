<?php
/* Smarty version 3.1.43, created on 2022-05-12 15:52:17
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627d1111392ca5_61302348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85aa881b3bc4c9ef382e0459f844a68f4158313e' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1651826369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_627d1111392ca5_61302348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1074553543627d111138a872_72518997', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_1069944427627d111138af41_83146349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1 id="js-product-list-header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_976914846627d111138d0a0_43982145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_71954283627d111138e663_92310416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="visible--desktop">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_1941834531627d111138fc93_04778823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_9754306627d1111390cf6_73250312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_1074553543627d111138a872_72518997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1074553543627d111138a872_72518997',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_1069944427627d111138af41_83146349',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_976914846627d111138d0a0_43982145',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_71954283627d111138e663_92310416',
  ),
  'product_list' => 
  array (
    0 => 'Block_1941834531627d111138fc93_04778823',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_9754306627d1111390cf6_73250312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1069944427627d111138af41_83146349', 'product_list_header', $this->tplIndex);
?>


    <section id="products">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_976914846627d111138d0a0_43982145', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71954283627d111138e663_92310416', 'product_list_active_filters', $this->tplIndex);
?>


        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1941834531627d111138fc93_04778823', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9754306627d1111390cf6_73250312', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>
          <div id="js-product-list-top"></div>
          <div id="js-product-list">
              <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
          <div id="js-product-list-bottom"></div>
      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
