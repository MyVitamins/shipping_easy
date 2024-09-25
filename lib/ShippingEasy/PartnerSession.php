<?php

class ShippingEasy_PartnerSession extends ShippingEasy_Object
{
  public function create($data = [])
  {
    return $this->request("post", "/partners/api/sessions", null, ["session" => $data], ShippingEasy::$partnerApiKey, ShippingEasy::$partnerApiSecret);
  }
}
