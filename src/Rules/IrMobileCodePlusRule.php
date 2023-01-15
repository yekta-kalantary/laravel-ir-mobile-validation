<?php

namespace YektaKalantary\LaravelIrMobileValidation\Rules;

class IrMobileCodePlusRule extends IrMobileRule
{
    protected ?string $pattern = '/^(\+989){1}[0-9]{9}+$/';
}
