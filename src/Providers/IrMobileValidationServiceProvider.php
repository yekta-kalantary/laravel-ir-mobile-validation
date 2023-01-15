<?php

namespace YektaKalantary\LaravelIrMobileValidation\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use YektaKalantary\LaravelIrMobileValidation\Rules\IrMobileCodePlusRule;
use YektaKalantary\LaravelIrMobileValidation\Rules\IrMobileCodeRule;
use YektaKalantary\LaravelIrMobileValidation\Rules\IrMobileCodeZeroRule;
use YektaKalantary\LaravelIrMobileValidation\Rules\IrMobileNoZeroRule;
use YektaKalantary\LaravelIrMobileValidation\Rules\IrMobileRule;
use YektaKalantary\LaravelIrMobileValidation\Rules\IrMobileZeroRule;

class IrMobileValidationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('ir_mobile', function ($attribute, $value) {
            return (new IrMobileRule())->passes($attribute, $value);
        });
        Validator::extend('ir_mobile_code_zero', function ($attribute, $value) {
            return (new IrMobileCodeZeroRule())->passes($attribute, $value);
        });
        Validator::extend('ir_mobile_code_plus', function ($attribute, $value) {
            return (new IrMobileCodePlusRule)->passes($attribute, $value);
        });
        Validator::extend('ir_mobile_code', function ($attribute, $value) {
            return (new IrMobileCodeRule)->passes($attribute, $value);
        });
        Validator::extend('ir_mobile_zero', function ($attribute, $value) {
            return (new IrMobileZeroRule)->passes($attribute, $value);
        });
        Validator::extend('ir_mobile_no_zero', function ($attribute, $value) {
            return (new IrMobileNoZeroRule)->passes($attribute, $value);
        });
    }
}
