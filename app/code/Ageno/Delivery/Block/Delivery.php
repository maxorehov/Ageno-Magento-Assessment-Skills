<?php


namespace Ageno\Delivery\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Directory\Model\Currency;


class Delivery implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var Currency
     */
    protected $currency;

    /**
     * Delivery constructor.
     * @param ScopeConfigInterface $scopeConfig
     * @param Currency $currency
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Currency $currency
    )
    {
        $this->scopeConfig = $scopeConfig;
        $this->currency = $currency;

    }

    /**
     * @return mixed
     */
    public function getDeliveryConfig()
    {
        return $this->scopeConfig->getValue('carriers/flatrate');
    }

    /**
     * Get currency symbol for current locale and currency code
     *
     * @return string
     */
    public function getCurrentCurrencySymbol()
    {
        return $this->currency->getCurrencySymbol();
    }

}