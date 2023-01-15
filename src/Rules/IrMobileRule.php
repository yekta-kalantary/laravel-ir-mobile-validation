<?php

namespace YektaKalantary\LaravelIrMobileValidation\Rules;

class IrMobileRule
{
    protected ?string $pattern = null;

    protected string $error;

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        if (! $this->pattern) {
            return preg_match('/^(((98)|(\+98)|(0098)|0)(9){1}[0-9]{9})+$/', $value) || preg_match('/^(9){1}[0-9]{9}+$/', $value);
        }

        return preg_match($this->pattern, $value);
    }
}
