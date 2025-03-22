<?php

namespace Simbeez\AddressAutocomplete\Model;

use Magento\Checkout\Model\ConfigProviderInterface;

class AutocompleteConfigProvider implements ConfigProviderInterface
{
    /**
     * @var \Simbeez\AddressAutocomplete\Helper\Data
     */
    private $helper;

    /**
     * @param \Simbeez\AddressAutocomplete\Helper\Data $helper
     */
    public function __construct(
        \Simbeez\AddressAutocomplete\Helper\Data $helper
    ) {

        $this->helper = $helper;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $config['simbeez_autocomplete'] = [
            'active'        => $this->helper->getConfigValue('simbeez_address/autocomplete/active'),
            'api_key'  =>    $this->helper->getConfigValue('simbeez_address/autocomplete/google_api_key'),
            'use_geolocation'  =>    $this->helper->getConfigValue('simbeez_address/autocomplete/use_geolocation'),
            'use_long_postcode'  =>    $this->helper->getConfigValue('simbeez_address/autocomplete/use_long_postcode')
        ];
        return $config;
    }
}
