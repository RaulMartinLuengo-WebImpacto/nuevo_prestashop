<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.performance.smarty.form_provider' shared service.

return $this->services['prestashop.adapter.performance.smarty.form_provider'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\PerformanceFormDataProvider(${($_ = isset($this->services['prestashop.adapter.smarty_cache.configuration']) ? $this->services['prestashop.adapter.smarty_cache.configuration'] : $this->load('getPrestashop_Adapter_SmartyCache_ConfigurationService.php')) && false ?: '_'});
