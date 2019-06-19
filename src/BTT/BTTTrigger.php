<?php
namespace BTT;
use BTT\Traits\JsonAble;

class BTTTrigger {
    use JsonAble;

    public $BTTTriggerConfig;
    public $BTTUUID;

    public $BTTOrder = 0;
    public $BTTDisplayOrder = 0;

    public function __construct($label = false)
    {
        if ($label) {
            $this->BTTTriggerConfig = new BTTTriggerConfig($label);
        }
        $this->BTTUUID = $this->uuidgen();
    }

    protected function uuidgen()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return strtoupper(vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4)));
    }

    public function addToGroup($group)
    {
        return $group->addItem($this);
    }

}
