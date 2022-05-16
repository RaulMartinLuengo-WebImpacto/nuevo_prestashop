<?php
/* Smarty version 3.1.43, created on 2022-05-16 11:16:44
  from 'C:\WebImpacto\Xampp\htdocs\prestashop\themes\classic-rocket\templates\_partials\font.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6282167cadaac9_78051686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbc50416f427c7838ad317fb58e2401007d7f9b0' => 
    array (
      0 => 'C:\\WebImpacto\\Xampp\\htdocs\\prestashop\\themes\\classic-rocket\\templates\\_partials\\font.tpl',
      1 => 1651826369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282167cadaac9_78051686 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="preconnect" href="//fonts.gstatic.com/" crossorigin>
<link rel="preconnect" href="//ajax.googleapis.com" crossorigin>
<?php echo '<script'; ?>
 type="text/javascript">
    WebFontConfig = {
        google: { families: [ 'Noto+Sans:400,700' ] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); <?php echo '</script'; ?>
>
<?php }
}
