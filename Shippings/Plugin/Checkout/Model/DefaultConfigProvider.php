<?php
namespace Pickup\Shippings\Plugin\Checkout\Model;
use Pickup\Shippings\Helper\Data;

class DefaultConfigProvider
{
	protected $helper;

	public function __construct(Data $helper)
	{
		$this->helper = $helper;
	}

	 public function afterGetConfig(\Magento\Checkout\Model\DefaultConfigProvider $subject,array $result){
        $active = $this->helper->getGeneralConfig('addressname');
        $cityName = $this->helper->getGeneralConfig('cityname');
        $result['pickup_address'] = $active;
        $result['sushil'] = $cityName;
    	return $result;
    }
}

?>
