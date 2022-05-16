<?php 
/**
 * PrestaShop module created by Arturo
 *
 * @author    arturo https://artulance.com
 * @copyright 2020-2021 arturo
 * @license   This program is not free software and you can't resell and redistribute it
 *
 * CONTACT WITH DEVELOPER
 * artudevweb@gmail.com
 */
class comentarioadicional extends Module{
    public function __construct()
    {
        $this->name          = 'comentarioadicional';
        $this->tab           = 'Blocks';
        $this->author        = 'artulance.com';
        $this->version       = '1.0.0';
        $this->bootstrap     = true;
       
        parent::__construct();
        $this->displayName = $this->l('Comentario adicional producto');
        $this->description = $this->l('Incluye una casilla adicional en la página de productos y se muestra en el front');

    }

    public function install()
    {
        if(!parent::install() 
        || !$this->installSql() 
        ||! $this->registerHook('displayProductAdditionalInfo') 
        || !$this->registerHook('displayAdminProductsMainStepLeftColumnMiddle'))
        {
         
            return false;
        }else{
            
            return true;
        }
    }

    public function unistall()
    {
        if(!parent::unistall() 
        || !$this->unistallSql() 
        || ! $this->unregisterHook('displayProductAdditionalInfo') 
        || !$this->unregisterHook('displayAdminProductsMainStepLeftColumnMiddle') )
        {
           
            return false;
        }else{
            return true;
        }
    }

    //Instalamos el sql para agregar el campo adicional
    public function installSql(){
        //uno normal y otro con el editor especial
        $sqlInstall = "ALTER TABLE " . _DB_PREFIX_ . "product "
                . "ADD custom_field VARCHAR(255) NULL";
        $sqlInstallLang = "ALTER TABLE " . _DB_PREFIX_ . "product_lang "
                . "ADD custom_field_lang_wysiwyg TEXT NULL";

        $cadenaSQl = Db::getInstance()->execute($sqlInstall);
        $cadenaSQlLang = Db::getInstance()->execute($sqlInstallLang);

        return $cadenaSQl && $cadenaSQlLang;
    }

    protected function unistallSql() {
        $sqlInstall = "ALTER TABLE " . _DB_PREFIX_ . "product "
                 . "DROP custom_field";
         $sqlInstallLang = "ALTER TABLE " . _DB_PREFIX_ . "product_lang "
                 . "DROP custom_field_lang_wysiwyg";
  
         $cadenaSQl = Db::getInstance()->execute($sqlInstall);
         $cadenaSQlLang = Db::getInstance()->execute($sqlInstallLang);
  
         return $cadenaSQl && $cadenaSQlLang;
     }

    /* Función que solo es necesaria si hay algo que configurar del módulo, en este caso no */
   /* public function getContent()
    {
      //  return $this->postProcess() . $this->getForm();
    }*/


    public function postProcess()
    {
        /* El submit con lo que hayamos configurado el campo en el getform */
        if (Tools::isSubmit('holi')) {
            $texto_header = Tools::getValue('texto_header');
            $texto_footer = Tools::getValue('texto_footer');
        /* Cogemos el texto de la tabla ps_configuration con su campo correspondiente para poner en el value*/
            Configuration::updateValue('HOLI_MODULO_TEXTO_HOME', $texto_header);
            Configuration::updateValue('HOLI_MODULO_TEXTO_FOOTER', $texto_footer);
            /* Devuelvo un mensaje de confirmación si se actualiza adecuadamente */
            return $this->displayConfirmation($this->l('Updated Successfully'));
        }
    }

    /*Puedo configurar que si no se registra en los hooks en el install, pueda meterlo en el hook de displayhome manualmente poniendo esta funcion
    https://devdocs.prestashop.com/1.7/modules/concepts/hooks/list-of-hooks/
     */
   /* public function hookactionProductControllerBefore()
    {
        $this->hookdisplayProductAdditionalInfo ( $params);
    }*/

    public function hookdisplayProductAdditionalInfo ( array $params)
    {
       /* $product = new Product($params['id_product']);*/
      /*  $id_product = (int)Tools::getValue('id_product');
        $product = new Product((int)Tools::getValue($id_product));*/
      $id_product = Tools::getValue('id_product');
        /*  $datos=$params['name'];
        $this->debug( $id_product);*/
        $datos=$this->returnInfo($id_product);
        $texto="aa";
        $languages = Language::getLanguages(false);
        /*$this->context->smarty->assign(array(
            'custom_field_lang_wysiwyg' => $product->custom_field_lang_wysiwyg,
            )
           );*/
           $this->context->smarty->assign(array(
            'custom_field_lang_wysiwyg' => $datos,
            )
           );
        return $this->display(__FILE__, 'views/templates/hook/productinform.tpl');
    }

    public function hookDisplayAdminProductsMainStepLeftColumnMiddle($params)
    {
        $product = new Product($params['id_product']);
        $languages = Language::getLanguages(false);
        $this->context->smarty->assign(array(
            'custom_field' => $product->custom_field,
            'custom_field_lang_wysiwyg' => $product->custom_field_lang_wysiwyg,
            'languages' => $languages,
            'default_language' => $this->context->employee->id_lang,
            )
           );
        //return $this->display(__FILE__, 'views/templates/hook/adminproduct.tpl');
        return $this->context->smarty->fetch($this->local_path.'views/templates/hook/adminproduct.tpl');
    }


    public function hookActionAfterUpdateProductFormHandler(array $params)
    {
        $this->updateData($params['form_data'], $params);
    }
    protected function updateData(array $data, $params)
    {
        $cat = new Product((int)$params['id']);
        $cat->custom_field_lang_wysiwyg= $data['custom_field_lang_wysiwyg'];
        $cat->update();

    }
    /*public function hookActionAfterCreateProductFormHandler(array $params)
        {
            $this->updateData($params['form_data'], $params);
        }*/

        public function debug($texto){
            $logfilename = dirname(__FILE__).'/log.log';
        /*$texto=var_dump($texto);*/
            file_put_contents($logfilename, date('M d Y G:i:s') . ' -- ' . $texto . "\r\n", is_file($logfilename)?FILE_APPEND:0);
        }
        

        public function returnInfo($id_product){
                $result = Db::getInstance()->getRow('
                    SELECT `custom_field_lang_wysiwyg`
                    FROM `'._DB_PREFIX_.'product_lang` producto
                    WHERE producto.`id_product` = '.(int)$id_product
                );
                
                return $result['custom_field_lang_wysiwyg'];
            
        }

}



?>