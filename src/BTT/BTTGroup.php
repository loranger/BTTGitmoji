<?php
namespace BTT;

class BTTGroup extends BTTButton {

    public $BTTAdditionalActions = [];
    public $BTTTriggerType = 630;
    public $BTTTriggerTypeDescription = 'Group';
    public $BTTPredefinedActionType = -1;
    public $BTTPredefinedActionName = 'No action';

    function addItem($object) {
        if (!$object->BTTOrder) {
            $object->BTTOrder = count($this->BTTAdditionalActions);
        }
        return array_push($this->BTTAdditionalActions, $object);
    }
}
