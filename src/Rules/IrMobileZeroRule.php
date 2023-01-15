<?php

namespace YektaKalantary\LaravelIrMobileValidation\Rules;

class IrMobileZeroRule extends IrMobileRule
{
    protected ?string $pattern = '/^(09){1}[0-9]{9}+$/';
}
