<?php
/**
 * Override Class ProductCore
 */
class Product extends ProductCore {
	/*
    * module: comentarioadicional
    * date: 2022-05-16 11:13:04
    * version: 1.0.0
    */
    public $custom_field;
	/*
    * module: comentarioadicional
    * date: 2022-05-16 11:13:04
    * version: 1.0.0
    */
    public $custom_field_lang_wysiwyg;
	 
	/*
    * module: comentarioadicional
    * date: 2022-05-16 11:13:04
    * version: 1.0.0
    */
    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null){
	 
			self::$definition['fields']['custom_field'] = [
	            'type' => self::TYPE_STRING,
	            'required' => false, 'size' => 255
	        ];
	        self::$definition['fields']['custom_field_lang_wysiwyg'] = [
	            'type' => self::TYPE_HTML,
	            'lang' => true,
	            'required' => false,
	            'validate' => 'isCleanHtml'
	        ];
	        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);
	}
}