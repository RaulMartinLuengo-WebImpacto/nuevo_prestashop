<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\PrestashopCheckout\PayPal;

use PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration;
use PrestaShop\Module\PrestashopCheckout\Customer;
use PrestaShop\Module\PrestashopCheckout\Exception\PsCheckoutException;
use PrestaShop\Module\PrestashopCheckout\Merchant;

class PayPalPayIn4XConfiguration
{
    const AVAILABLE_FOR_MERCHANT = ['FR'];
    const AVAILABLE_FOR_CUSTOMER = [[
        'country' => 'FR',
        'currency' => 'EUR',
    ]];

    const PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE = 'PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE';
    const PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE = 'PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE';

    const PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE_BUTTON = 'PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE_BUTTON';
    const PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE_BUTTON = 'PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE_BUTTON';
    const PS_CHECKOUT_PAY_IN_4X_CART_PAGE_BUTTON = 'PS_CHECKOUT_PAY_IN_4X_CART_PAGE_BUTTON';

    /**
     * @var PrestaShopConfiguration
     */
    private $configuration;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Merchant
     */
    private $merchant;

    /**
     * @param PrestaShopConfiguration $configuration
     * @param Customer $customer
     * @param Merchant $merchant
     */
    public function __construct(PrestaShopConfiguration $configuration, Customer $customer, Merchant $merchant)
    {
        $this->configuration = $configuration;
        $this->customer = $customer;
        $this->merchant = $merchant;
    }

    public function isActiveForMerchant()
    {
        $active = false;
        foreach (self::AVAILABLE_FOR_MERCHANT as &$country) {
            if ($this->merchant->isLang($country)) {
                $active = true;
            }
        }

        return $active;
    }

    public function isActiveForCustomer()
    {
        $active = false;
        foreach (self::AVAILABLE_FOR_CUSTOMER as &$item) {
            if ($this->customer->isLang($item['country'], $item['currency'])) {
                $active = true;
            }
        }

        return $active;
    }

    public function isOrderPageActive()
    {
        return (bool) $this->configuration->get(self::PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE);
    }

    public function isOrderPageEnabled()
    {
        return $this->isActiveForCustomer() && $this->isActiveForMerchant()
            ? (bool) $this->configuration->get(self::PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE)
            : false;
    }

    public function isProductPageActive()
    {
        return (bool) $this->configuration->get(self::PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE);
    }

    public function isProductPageEnabled()
    {
        return $this->isActiveForCustomer() && $this->isActiveForMerchant()
            ? (bool) $this->configuration->get(self::PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE)
            : false;
    }

    /**
     * @param bool $status
     *
     * @throws PsCheckoutException
     */
    public function setProductPage($status)
    {
        $this->configuration->set(self::PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE, $status);
    }

    /**
     * @param bool $status
     *
     * @throws PsCheckoutException
     */
    public function setOrderPage($status)
    {
        $this->configuration->set(self::PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE, $status);
    }

    /**
     * @param bool $status
     *
     * @throws PsCheckoutException
     */
    public function setCartPageButton($status)
    {
        $this->configuration->set(self::PS_CHECKOUT_PAY_IN_4X_CART_PAGE_BUTTON, $status);
    }

    /**
     * @param bool $status
     *
     * @throws PsCheckoutException
     */
    public function setOrderPageButton($status)
    {
        $this->configuration->set(self::PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE_BUTTON, $status);
    }

    /**
     * @param bool $status
     *
     * @throws PsCheckoutException
     */
    public function setProductPageButton($status)
    {
        $this->configuration->set(self::PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE_BUTTON, $status);
    }

    public function isOrderPageButtonActive()
    {
        return (bool) $this->configuration->get(self::PS_CHECKOUT_PAY_IN_4X_ORDER_PAGE_BUTTON);
    }

    public function isCartPageButtonActive()
    {
        return (bool) $this->configuration->get(self::PS_CHECKOUT_PAY_IN_4X_CART_PAGE_BUTTON);
    }

    public function isProductPageButtonActive()
    {
        return (bool) $this->configuration->get(self::PS_CHECKOUT_PAY_IN_4X_PRODUCT_PAGE_BUTTON);
    }
}
