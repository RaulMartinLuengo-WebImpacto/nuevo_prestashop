<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data.factory.no_qty_product_with_combination' shared service.

return $this->services['prestashop.core.grid.data.factory.no_qty_product_with_combination'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(${($_ = isset($this->services['prestashop.core.grid.query_builder.monitoring.no_qty_product_with_combination']) ? $this->services['prestashop.core.grid.query_builder.monitoring.no_qty_product_with_combination'] : $this->load('getPrestashop_Core_Grid_QueryBuilder_Monitoring_NoQtyProductWithCombinationService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.query.doctrine_query_parser']) ? $this->services['prestashop.core.grid.query.doctrine_query_parser'] : ($this->services['prestashop.core.grid.query.doctrine_query_parser'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser())) && false ?: '_'}, 'no_qty_product_with_combination');