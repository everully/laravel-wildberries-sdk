<?php

use Everully\LaravelWildberriesSdk\WildberriesFacade;

if (!function_exists('wildberries')) {

    /**
     * Helper to easy load the wildberries api facade.
     */
    function wildberries(): WildberriesFacade
    {
        return new WildberriesFacade();
    }
}
