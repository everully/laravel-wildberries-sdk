<?php

return [
    /**
     * While logged in, obtain your token from https://seller.wildberries.ru/supplier-settings/access-to-api.
     */
    'token' => env('WILDBERRIES_TOKEN', ''),

    /**
     * If you want to use the sandbox environment, set this to true.
     */
    'sandbox' => env('WILDBERRIES_SANDBOX', false),
];