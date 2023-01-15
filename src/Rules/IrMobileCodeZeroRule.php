<?php

namespace YektaKalantary\LaravelIrMobileValidation\Rules;

class IrMobileCodeZeroRule extends IrMobileRule
{
    protected ?string $pattern = '/^(00989){1}[0-9]{9}+$/';
}
