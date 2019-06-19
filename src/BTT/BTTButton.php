<?php
namespace BTT;

class BTTButton extends BTTTrigger {

    public $BTTTouchBarButtonName = 'New button';
    public $BTTTriggerType = 629;
    public $BTTTriggerTypeDescription = 'Touch Bar button';
    public $BTTTriggerClass = 'BTTTriggerTypeTouchBar';
    public $BTTPredefinedActionType = 193;
    public $BTTPredefinedActionName = 'Type Custom Text';
    public $BTTEnabled = 1;
    public $BTTEnabled2 = 1;
    public $BTTAlternateModifierKeys = 0;
    public $BTTNotesInsteadOfDescription = 0;
    public $BTTModifierMode = 0;
    public $BTTMergeIntoTouchBarGroups = 0;


    function __construct($label = null) {
        if ($label) {
            $this->BTTTouchBarButtonName = $label;
        }
        parent::__construct($this->BTTTouchBarButtonName);
    }

    public function setActionType($actionTypeID)
    {
        $this->BTTPredefinedActionType = $actionTypeID;
        return $this;
    }

    public function setActionName($actionName)
    {
        $this->BTTPredefinedActionName = $actionName;
        return $this;
    }

    public function setStringToType($string)
    {
        $this->BTTStringToType = $string;
        return $this;
    }

    public function setFontSize($size)
    {
        $this->BTTTriggerConfig->BTTTouchBarButtonFontSize = $size;
        return $this;
    }

    public function setPlacement($value)
    {
        $this->BTTTriggerConfig->BTTTouchBarItemPlacement = $value;
        return $this;
    }


}
