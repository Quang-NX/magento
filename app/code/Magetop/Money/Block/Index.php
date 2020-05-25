<?php
namespace Magetop\Money\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Index extends Template
{
	public function getMoneyInformation()
    {


        
        $curl = curl_init();

       // OPTIONS:
       curl_setopt($curl, CURLOPT_URL, "https://www.dongabank.com.vn/exchange/export");
       curl_setopt($curl, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
       ));
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
       // EXECUTE:
       $result = curl_exec($curl);
       if(!$result){die("Connection Failure");}
       curl_close($curl);
       return $result;
    }
}