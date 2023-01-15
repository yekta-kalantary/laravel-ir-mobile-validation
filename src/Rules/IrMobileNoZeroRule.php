<?php

namespace YektaKalantary\LaravelIrMobileValidation\Rules;

class IrMobileNoZeroRule extends IrMobileRule
{
    protected ?string $pattern = '/^(9){1}[0-9]{9}+$/';
}
