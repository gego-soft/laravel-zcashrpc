<?php

namespace Gegosoft\Zcash\Traits;

trait Zcashd
{
    public function zcashd()
    {
        return app('zcashd');
    }
}
