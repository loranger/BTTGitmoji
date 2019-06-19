<?php
namespace BTT\Traits;

Trait JsonAble {

    function __toString() {
        return json_encode($this);
    }

}
