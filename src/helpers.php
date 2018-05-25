<?php

if (! function_exists('zcashd')) {
    /**
     * Get zcashd client instance.
     *
     * @return \Gegosoft\Zcash\Client
     */
    function zcashd()
    {
        return app('zcashd');
    }
}
