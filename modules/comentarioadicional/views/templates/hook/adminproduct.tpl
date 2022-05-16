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
      <h2>{l s='Campo adicional' mod='comentarioadicional'}</h2>
          <div class="col-lg-12 col-xl-12">
            <label class="form-control-label">{l s='Campo multilingue con editor wysiwyg' mod='comentarioadicional'}</label>
                <div class="editorwys tab-content bordered">
                    {foreach from=$languages item=language }
                    <div class="tab-pane translation-label-{$language.iso_code} {if $default_language == $language.id_lang}active{/if}">
                        <textarea class="autoload_rte" name="custom_field_lang_wysiwyg_{$language.id_lang}">{if isset({$custom_field_lang_wysiwyg[$language.id_lang]}) && {$custom_field_lang_wysiwyg[$language.id_lang]} != ''}{$custom_field_lang_wysiwyg[$language.id_lang]}{/if}</textarea>
                    </div>{/foreach}
                </div>

        </div>
      </div>
</div>
{/block}
