<?php
namespace Custom\Shipping\Model\Carrier;

use Magento\Shipping\Model\Carrier\AbstractCarrier;
use Magento\Shipping\Model\Carrier\CarrierInterface;
use Magento\Framework\DataObject;

class Pickup extends AbstractCarrier implements CarrierInterface
{
    protected $_code = 'pickup'; // Código único para o transportador

    public function collectRates(DataObject $request)
    {
        $result = $this->_rateResultFactory->create();

        $method = $this->_rateMethodFactory->create();
        $method->setCarrier($this->_code);
        $method->setCarrierTitle('Retirado na Loja');
        $method->setMethod($this->_code);
        $method->setMethodTitle('Retirado na Loja');
        $method->setPrice(0); // Preço zero, pois não há custo de frete
        $method->setCost(0);

        $result->append($method);
        return $result;
    }

    public function getAllowedMethods()
    {
        return [
            $this->_code => 'Retirado na Loja',
        ];
    }
}
