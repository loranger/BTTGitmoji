<?php
namespace BTT;
use BTT\Traits\JsonAble;

class BTTCloseButton extends BTTButton {
    use JsonAble;

    public $BTTTouchBarButtonName = 'Close Group';
    public $BTTTriggerTypeDescription = 'Touch Bar button';
    public $BTTPredefinedActionType = 191;
    public $BTTPredefinedActionName = 'Close currently open Touch Bar group';
    public $BTTIconData = 'Standard Close Icon';

    function __construct($label = null)
    {
        if ($label) {
            $this->BTTTouchBarButtonName = $label;
        }
        parent::__construct($this->BTTTouchBarButtonName);

        $this->BTTTriggerConfig->BTTTouchBarButtonColor = "0.000000, 0.000000, 0.000000, 255.000000";
        $this->BTTTriggerConfig->BTTTouchBarOnlyShowIcon = true;
        $this->BTTTriggerConfig->BTTTouchBarItemIconWidth = 16;
        $this->BTTTriggerConfig->BTTTouchBarItemPlacement = 1;
    }

}
