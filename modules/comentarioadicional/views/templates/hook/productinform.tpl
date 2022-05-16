{*
* 2021 ARTULANCE.COM
*
* NOTICE OF LICENSE
*
* This file is licenced under the Software License Agreement.
* With the purchase or the installation of the software in your application
* you accept the licence agreement
*
* @author    ARTULANCE.COM <artudevweb@gmail.com>
* @copyright 2021 ARTULANCE.COM
* @license   Free license 
*
*}
<style>
{literal}

{/literal}
</style>


{block name='holi'}

<div id="comentario_modulo_producto" class="container">
    <div class="py-5 text-center">
    {* no lo tengo que escapar   <p class="lead">{$custom_field_lang_wysiwyg|escape:'html':'UTF-8'} {html_entity_decode($custom_field_lang_wysiwyg|escape:'htmlall':'UTF-8')}</p>*}
        <p class="lead"> {$custom_field_lang_wysiwyg nofilter}</p>
      </div>
</div>
{/block}
