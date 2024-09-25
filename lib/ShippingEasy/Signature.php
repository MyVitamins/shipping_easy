<?php

class ShippingEasy_Signature
{
  public $api_secret;
  public $http_method;
  public $path;
  public $params;
  public $json_body;

  public function __construct($api_secret=null, $http_method=null, $path=null, $params=null, $json_body=null)
  {
    $this->api_secret = $api_secret;
    $this->http_method = strtoupper((string) $http_method);
    $this->path = $path;
    ksort($params);
    $this->params = $params;

    if (is_string($json_body)) {
      $this->json_body = str_replace("\/","/", $json_body);
    } else {
      $this->json_body = json_encode($json_body, JSON_THROW_ON_ERROR);
    }
  }

  public function getApiSecret()
  {
    return $this->api_secret;
  }

  public function getHttpMethod()
  {
    return $this->http_method;
  }

  public function getPath()
  {
    return $this->path;
  }

  public function getParams()
  {
    return $this->params;
  }

  public function getJsonBody()
  {
    return $this->json_body;
  }

  public function plaintext()
  {
    $parts = [$this->getHttpMethod()];
    $parts[] = $this->getPath();
    
    if (!empty($this->getParams()))
      $parts[] = http_build_query($this->getParams());

    if ($this->getJsonBody() != "null")
      $parts[] = $this->getJsonBody();

    return implode("&", $parts);
  }

  public function encrypted()
  {
    return hash_hmac('sha256', (string) $this->plaintext(), (string) $this->getApiSecret());
  }

  public function equals($signature)
  {
    return $this->encrypted() == $signature;
  }

}
