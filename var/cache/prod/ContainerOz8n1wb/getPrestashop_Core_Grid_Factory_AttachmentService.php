<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.attachment' shared service.

return $this->services['prestashop.core.grid.factory.attachment'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(${($_ = isset($this->services['prestashop.core.grid.definition.factory.attachment']) ? $this->services['prestashop.core.grid.definition.factory.attachment'] : $this->load('getPrestashop_Core_Grid_Definition_Factory_AttachmentService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.data_factory.attachment_decorator']) ? $this->services['prestashop.core.grid.data_factory.attachment_decorator'] : $this->load('getPrestashop_Core_Grid_DataFactory_AttachmentDecoratorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.filter.form_factory']) ? $this->services['prestashop.core.grid.filter.form_factory'] : $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'});