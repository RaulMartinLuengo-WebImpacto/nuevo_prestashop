<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.customization.query_handler.get_product_customization_fields_handler' shared service.

return $this->services['prestashop.adapter.product.customization.query_handler.get_product_customization_fields_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Customization\QueryHandler\GetProductCustomizationFieldsHandler(${($_ = isset($this->services['prestashop.adapter.product.customization.repository.customization_field_repository']) ? $this->services['prestashop.adapter.product.customization.repository.customization_field_repository'] : $this->load('getPrestashop_Adapter_Product_Customization_Repository_CustomizationFieldRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.product.repository.product_repository']) ? $this->services['prestashop.adapter.product.repository.product_repository'] : $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')) && false ?: '_'});