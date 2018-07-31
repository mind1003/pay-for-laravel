<?php
namespace Tavey\Pay;
use Illuminate\Config\Repository;

class PayManager {
    protected $config;

    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    public function getConfig () {
        return $this->config->get('pay.options');
    }

}