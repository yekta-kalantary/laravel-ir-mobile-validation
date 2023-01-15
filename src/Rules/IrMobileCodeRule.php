<?php

namespace YektaKalantary\LaravelIrMobileValidation\Rules;

class IrMobileCodeRule extends IrMobileRule
{
    protected ?string $pattern = '/^(989){1}[0-9]{9}+$/';
}
