<?php

class ShippingEasy_PartnerAccount extends ShippingEasy_Object
{
  public function create($data = [])
  {
    return $this->request("post", "/partners/api/accounts", null, ["account" => $data], ShippingEasy::$partnerApiKey, ShippingEasy::$partnerApiSecret);
  }
}
