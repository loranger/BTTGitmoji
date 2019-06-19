<?php
namespace BTT;
use BTT\Traits\JsonAble;

class BTTTriggerConfig {
    use JsonAble;

    public $BTTTouchBarHideRecentlyUsedEmoji = false;
    public $BTTTouchBarItemPadding = 0;
    public $BTTTouchBarBringPlayerToFront = 0;
    public $BTTTouchBarButtonColor = "75.323769, 75.323769, 75.323769, 255.000000";
    public $BTTTouchBarEmojiHideBackButton = false;
    public $BTTTouchBarItemPlacement = 0;
    public $BTTTouchBarAlwaysShowButton = false;
    public $BTTTouchBarHideWhenPaused = 0;
    public $BTTKeepGroupOpenWhileSwitchingApps = false;
    public $BTTTouchBarItemIconHeight = 22;
    public $BTTTouchBarBatteryHideOnCharging = false;
    public $BTTTouchBarButtonTextAlignment = 0;
    public $BTTTBWidgetWidth = 400;
    public $BTTTouchBarDefaultPlayer = 0;
    public $BTTTouchBarItemIconWidth = 22;
    public $BTTTouchBarButtonName = 'New Button Config';
    public $BTTTouchBarHideWhenNoPlayer = false;
    public $BTTTouchBarButtonFontSize = 15;
    public $BTTTouchBarHideCover = 0;
    public $BTTTouchBarOnlyShowIcon = false;
    public $BTTTouchBarFreeSpaceAfterButton = 5;

    function __construct($label) {
        $this->BTTTouchBarButtonName = $label;
    }

}
